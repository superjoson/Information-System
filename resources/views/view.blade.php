 
<!DOCTYPE html>
<html>
   <head>
      <style>
         table, th, td {
            border: 2px solid black;              
         }
         th, td {
            padding-top: 5px;
            padding-bottom: 10px;
            padding-left: 15px;
            padding-right: 20px;}
      </style>
   </head>

   <body>
      <h1>RECORDS DISPLAY</h1>
      <table>
         <tr>
            <th>Fisrt Name</th>
            <th>Email</th>
            <th >Password</th>
            <th>ID</th>
            <th colspan="52" >ACTION</th>
         </tr>
         @foreach ($users as $user)         
         <tr>
            <td>                
                
                {{$user->name}}
            </td>
            <td>   {{$user->email}} </td>
            <td>   {{$user->password}}  </td>
            <td >   {{$user->id}}  </td>
            <td>
             <form method="POST" action="/delete/{{$user->id}}">
               @csrf
               @method('DELETE')
               <input type="submit" value="DELETE THIS "
               onclick="return confirm('Are you sure you want to Delete {{$user['name']}}')"/>
               <td>
           </form>
                        
               <a href="/edit/{{$user->id}}">EDIT ME</a>
            
             </td>
             
         </tr>
            @endforeach
      </table>

      <form action="/joson" method="get">
         <input type="submit" value="<<BACK TO CREATE">
         </form> 

      {{ $users->links() }}

// Passing additional data to the view...
 
   </body>
</html>
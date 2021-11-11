 
<!DOCTYPE html>
<html>
   <head>
      <style>
         table, th, td {
            border: 1px solid black;  
         }
      </style>
   </head>

   <body>
      <h1>UPDATE DISPLAY</h1>

      <form action="/updated/{{$user->id}}" method="post">
        @csrf
        {{-- {{ method_field('PUT') }}  --}}
        @method('PUT')
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value="{{$user->name}}" required><br>
        <label for="Email">Email:</label><br>
        <input type="text" id="email" name="email" value="{{$user->email}}" required><br>
        <label for="Password"> Password:</label><br>
        <input type="text" id="pwd" name="pwd" value="{{$user->password}}" required><br><br>
    
        <input type="submit" value="EDIT">
    </form>  
      
 
   </body>
</html>
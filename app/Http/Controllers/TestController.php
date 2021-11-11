<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function joson(){
        return view('create');
    }

    public function edwin(Request $request){

     $user = new User();
     $user->name = $request->fname;
     $user->email = $request->email;
     $user->password = Hash::make($request->pwd);
     $user->save();
 
    return redirect('displayMode');
    }
    public function display(Request $display){
        $user_display = User::paginate(3);
                return view('view')->with('users', $user_display);
    }

    public function delete($id){
        $delete = User::
                where('id', $id)
                ->delete();
                return redirect('displayMode');
    }

    public function show_update($id){
        $user = User::find($id);     
                return view('update')->with('user', $user);
    }

    public function updated(Request $request,$id){       
        $update = User::
                    where('id',$id)->first();
        $update->name = $request->fname;
        $update->email = $request->email;
        $update->password = Hash::make($request->pwd);
        $update->save();
        return redirect('displayMode');  
    } 
    Public function ecrypt(Request $enc){
        // return view('encryption');
        $encrypted = Crypt::encrypt('secret');
        return $encrypted;         
    }   
    
}

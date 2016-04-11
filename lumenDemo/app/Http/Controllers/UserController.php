<?php
  
namespace App\Http\Controllers;
  
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
  
  
class UserController extends Controller{


    public function index(){
  
        $User  = User::all();
  
        return response()->json($User);
  
    }
  
    public function getUser($id){
  
        $User  = User::find($id);
  
        return response()->json($User);
    }
  
    public function createUser(Request $request){
  
        $User = User::create($request->all());
  
        return response()->json($User);
  
    }
  
    public function deleteUser($id){
        $User  = User::find($id);
        $User->delete();
 
        return response()->json('用户已删除');
    }
  
    public function updateUser(Request $request,$id){
        $User  = User::find($id);
        $User->username = $request->input('username');
        $User->password = $request->input('password');
        $User->nickname = $request->input('nickname');
        $User->save();
  
        return response()->json($User);
    }
  
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Session;
class UserController extends Controller
{
    //
    function login(Request $request){
        $user= User::where(['email' => $request->email])->first();
        
        if(!$user || !Hash::check($request->password,$user->password)){
            return redirect('/login');
        }
        else{
            $request->session()->put('user',$user);
            return redirect('/');
        }
        
    }
    
    function register(Request $request){
        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();
        return redirect ('/login');
    }
    
    function logout(Request $request){
        if ($request->session()->has('user')){
            Session::forget('user');
        }
        else{
            Session::forget('admin');
        }
        return redirect('/');

    }
    function adminLogin(Request $request){
        $admin= Admin::where(['email' => $request->email])->first();
        
        if(!$admin || !Hash::check($request->password,$admin->password)){
            return redirect('/admin/login');
        }
        else{
            $request->session()->put('admin',$admin);
            return redirect('/admin/orders');
        }
        
    }
    function showAdmins(){
        $admins=Admin::all();
        return view('admin.index',['admins'=>$admins]);
    }
    function adminRegister(Request $request){
        $admin=new Admin;
        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->password=Hash::make($request->password);
        $admin->save();
        return redirect ('/admin/login');
    }

    function deleteAdmin($id)
    {
        Admin::destroy($id);
        return redirect('/admins');
    }
    public function editAdmin($id){
        $product=Admin::findOrFail($id);
        return view('admin.edit',['product'=>$product]);
    }
    public function updateAdmin(Request $request,$id){
        $product=Admin::findOrFail($id);
        $product->name=$request->name;
        $product->email=$request->email;
        $product->update();
        return redirect('/admins');
    }

    
}

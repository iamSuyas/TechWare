<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;

class UserController extends Controller
{
    //
    function login(Request $request)
    {
        $user = User::where(['email' => $request->email])->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return redirect('/login');
        } else {
            $request->session()->put('user', $user);
            return redirect('/');
        }

    }
    function adminLogin(Request $request)
    {
        $admin = Admin::where(['email' => $request->email])->first();

        if (!$admin || !Hash::check($request->password, $admin->password)) {
            return redirect('/admin/login');
        } else {
            $request->session()->put('admin', $admin);
            return redirect('/admin/orders');
        }

    }

    function register(Request $request)
    {
        $request->validate([
            'name' => "required|min:3|max:255",
            'email' => "required|email|unique:users,email",
            'password' => "required|min:3|max:255",

        ]);


        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/login');
    }



    function showAdmins()
    {
        $admins = Admin::all();
        return view('admin.index', ['admins' => $admins]);
    }
    function adminRegister(Request $request)
    {
        $request->validate([
            'name' => "required|min:3|max:255",
            'email' => "required|email|unique:users,email",
            'password' => "required|min:3|max:255",

        ]);
        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->save();
        return redirect('/admin/orders');
    }

    function deleteAdmin($id)
    {
        Admin::destroy($id);
        return redirect('/admins');
    }
    public function editAdmin($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.edit', ['admin' => $admin]);
    }
    public function updateAdmin(Request $request, $id)
    {
        $request->validate([
            'name' => "required|min:3|max:255",
            'email' => "required|email|unique:users,email",

        ]);
        $admin = Admin::findOrFail($id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->update();
        return redirect('/admins');
    }


}
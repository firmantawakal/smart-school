<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('home');
        }else{
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'id_school' => $request->input('id_school'),
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('home');
        }else{
            Session::flash('error', 'Wrong ID school, username or password');
            return redirect('/');
        }
    }

    public function register()
    {
        return view('register');
    }

    public function actionregister(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:tb_user',
            'id_school' => 'required|unique:school',
            'name' => 'required',
            'email' => 'required|unique:tb_user',
            'password' => 'required',
        ]);
        
        $user = new User();
        $user->username = $request->username;
        $user->id_school = $request->id_school;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->level = 'Admin';
        $user->save();

        $sch = new School();
        $sch->id_school = $request->id_school;
        $sch->name_school = $request->name_school;

        Session::flash('success', 'Register success! Please login using registered data');
        return redirect('login');
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}

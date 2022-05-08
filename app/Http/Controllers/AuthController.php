<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            "email" => ["required", "email", "string"],
            "password" => ["required"]
        ]);
        if(auth("web")->attempt($data)){
            return redirect(route('index'));
        }
        return redirect(route('login'))->withErrors(["email"=>"Ползователь не найден, либо данные введены не правильно"]);
    }

    public function logout(){
        auth("web")->logout();
        return view('pages.index');
    }

    public function registerForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            "name" => ["required", "string"],
            "email" => ["required", "email", "string", "unique:users,email"],
            "password" => ["required",],
        ]);
        $user = User::create([
            "name" => $data["name"],
            "email" => $data["email"],
            "password" => bcrypt($data["password"]),
        ]);
        if ($user) {
            auth("web")->login($user);
        }
        return redirect('/');
    }

}

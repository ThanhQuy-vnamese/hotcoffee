<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getview() {
        return view('Login');
    }
    public function Login(Request $request) {
        $email = $request->get('email');
        $password = $request->get('password');

        if(Auth::attempt(['email' => $email, 'password' => $password])){
            echo 'thanh cong';
            Auth::user();
        }
        else{
            echo 'khong thanh cong';
        }
        return view('Login');
    }
    public function create(Request $request) {
        $email = $request->get('email');
        $password = $request->get('password');

        $user = new User();
        $user->id = 11;
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->name = 'Name';
        if($user->save()){
            echo 'thanh cong';
        }
        else{
            echo 'khong thanh cong';
        }

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.pages.login', [
            'title' => 'Login'
        ]);
    }

    public function login_process()
    {
        request()->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        try {
            $credentials = request()->only('email', 'password');
            $remember = request()->has('remember');

            if (Auth::attempt($credentials, $remember)) {
                return redirect()->intended('dashboard');
            } else {
                return redirect()->route('login')->with('error', 'Invalid email or password');
            }
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('login')->with('error', $th->getMessage());
        }
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('login');
    }

    public function register()
    {
        return view('auth.pages.register', [
            'title' => 'Register'
        ]);
    }

    public function register_process()
    {
        request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required'],
            'phone_number' => ['required'],
            'password' => ['required', 'confirmed', 'min:5'],
            'password_confirmation' => ['required'],
        ]);


        try {
            $data = request()->all();
            $data['name'] = request('first_name') . ' ' . request('last_name');
            $data['password'] = bcrypt(request('password'));
            $user = User::create($data);
            $user->assignRole('user');

            return redirect()->route('login')->with('success', 'Register successfully. Please login');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function forgot_password()
    {
        return view('auth.pages.forgot-password', [
            'title' => 'Forgot Password'
        ]);
    }
}

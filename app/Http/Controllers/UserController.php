<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //get register form
    public function create()
    {

        return view('users.register');
    }

    //create user
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        //Hash password
        $formFields['password'] = bcrypt('password');

        $user = User::create($formFields);

        //login
        Auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in!');
    }

    //logout user
    public function logout(Request $request)
    {
        auth()->logout();

        //invalidate users session and regenerate csrf token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been successfully logged out!');
    }

    //show login form
    public function login()
    {
        return view('users.login');
    }

    //authenticate
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        //attempt
        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid credentials!'])->onlyInput('email');
    }
}

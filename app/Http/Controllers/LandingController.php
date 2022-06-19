<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.intro');
    }

    // HOME FUNCTION
    public function home()
    {
        return view('landing.home');
    }


    // REGISTER FUNCTION
    public function register()
    {
        return view('landing.register');
    }

    public function store(Request $request)
    {
        // validate requests
        $validatedData = $request->validate([
            "name"  => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password'  => 'required|min:5|max:255'
        ]);
        // hash password
        $validatedData['password'] = Hash::make($validatedData['password']);

        // create data user into database
        User::create($validatedData);

        // redirect to login page
        return redirect()->to('login')->with("success", "Registration successfully!");
    }


    // lOGIN FUNCTION
    public function login()
    {
        return view('landing.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password'  => 'required'
        ]);

        $isRememberMe = $request->post('remember-me') ? true : false;
        if (Auth::attempt($credentials, $isRememberMe)) {
            $request->session()->regenerate();
            return redirect()->intended('home');
        }

        return back()->with('loginError', 'Incorrect email address and / or password!');
    }

    public function logout()
    {
        auth()->logout();

        request()->session()->regenerate();
        request()->session()->regenerateToken();

        return redirect()->to('/')->with('success', 'Log out successfully!');
    }
}

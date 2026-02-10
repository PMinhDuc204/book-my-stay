<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login(LoginRequest $request)
    {
        if($request->validated()) {
            if(auth()->attempt([
                'email' =>$request->email,
                'password' =>$request->password
            ])) {    
                $request->session()->regenerate();
                return redirect()->route('home');
            }else {
                throw ValidationException::withMessages([
                    'email' => 'These credentials do not match any of our records.'
                ]);
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function register(RegisterRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        auth()->login($user);
        $request->session()->regenerate();
        return redirect()->route('home');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->regenerate();
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     */
    public function formLogin()
    {
        return Inertia::render("Admin/Auth/Login");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function formRegister()
    {
        return Inertia::render("Admin/Auth/Register");
    }
    
}

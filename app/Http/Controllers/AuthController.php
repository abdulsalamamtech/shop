<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    // Register a new user
    public function register(Request $request)
    {
        // Validate user information
        $validated = $request->validate([
            'name' => ['required', 'min:3', 'max:30'],
            'email' => ['required', 'email','max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', 'min:8', 'max:255'],
        ]);

        // Hash the user password
        $validated['password'] = Hash::make($validated['password']);

        dd($validated);
        
        // Create new user
        $user = User::create($validated);


        // Check if the user is created successfully
        if(!$user){
            return back()->with('error','something went wrong, please try again later!');
        }else{
            // Login the new user
            Auth::login($user);
        }

        // Check if the user was redirected to register page
        if ($request->has('register')) {
            return redirect()->back()->with('success','registration successful!');
        }

        return redirect()->route('home')->with('success','registration successful!');
    }

    // Login a user
    public function login(Request $request)
    {
        //
    }
}

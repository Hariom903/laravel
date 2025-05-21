<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\User;

class Register extends Controller
{
    function Register(Request $request) 
       {

      
        // Step 1: Validate the request
        $validated = $request->validate([
            'firstname' => 'required|string|max:255|min:3',
            'lastname'  => 'nullable|string|max:255',
            'email'      => 'required|email|unique:users,email',
            'password'   => 'required|min:6|confirmed',
        ]);

        // Step 2: Save user (example for storing in users table)
       User::create([
            'name'     => $validated['firstname'] . ' ' . $validated['lastname'],
            'email'    => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        // Step 3: Redirect or show message
        return redirect('login')->with('success', 'Registration successful! You can now log in.');
    } 
}

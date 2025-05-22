<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
            'password' => Hash::make($validated['password']),
        ]);

        // Step 3: Redirect or show message
        return redirect('login')->with('success', 'Registration successful! You can now log in.');
    } 

    public function userlogin(Request $request){
      $validated = $request->validate([
        'email' =>  'required |email',
        "password"=>'required'
      ]);
      if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard'); // Change to your desired page
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function userlogout(){
         Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
    }

    public function showchangePassword(){
        return view('change-password');
    }
    public function changePassword(Request $request){
     
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required| min:8|confirmed',
        ]);
        if(!Hash::check($request->current_password,Auth::User()->password)){
         return back()->withErrors(['current_password' => 'Current password is incorrect']);
        }
  $user = Auth::user();
$user->update([
    'password' => Hash::make($request->new_password)
]);

  
            Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login')->with('success', 'Password updated successfully!');
}    
    
}

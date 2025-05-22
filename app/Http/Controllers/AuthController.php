<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Auth\Recaller;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

    $credentials = $request->only('email', 'password');
      
        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        $user = Auth::user();

        // Create token for the user
        $token = $user->createToken('api-token')->plainTextToken;

        return response()->json([
            'token' => $token,
            'user' => $user
        ]);
    }

public function Alluser(Request $request){
    return response()->json(Auth::user()->all());
}

    public function user(Request $request)
    {
        return response()->json($request->user());
    }

    public function admin(Request $request)
    {
        return response()->json(['message' => 'Welcome Admin']);
    }

    public function superuser(Request $request)
    {
        return response()->json(['message' => 'Welcome Superuser']);
    }
}

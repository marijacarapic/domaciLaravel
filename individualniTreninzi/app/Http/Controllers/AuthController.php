<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    //registracija usera
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['Error!', $validator->errors()]);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('MarijaTokenRegistration')->plainTextToken;

        $odgovor = [
            'Korisnik: ' => $user,
            'Token: ' => $token,
        ];

        return response()->json($odgovor);
    }

    //login usera
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['Error!', $validator->errors()]);
        }

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['Error: ' => 'Pokusajte ponovo!']);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('MarijaTokenLogin')->plainTextToken;

        $odgovor = [
            'Korisnik: ' => $user,
            'Token: ' => $token,
        ];

        return response()->json($odgovor);
    }

    //logout usera
    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json('Logout uspesan!');
    }

}
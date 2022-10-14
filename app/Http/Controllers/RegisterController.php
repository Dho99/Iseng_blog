<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\flash;
// use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:5|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'

        ]);

        // bcrypt the best oss
        $validatedData['password'] = bcrypt($validatedData['password']);

        // other encrypting option
        // $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);


        return redirect('/login')->with('success', 'Registrasi Berhasil, Silakan Login');
    }
}

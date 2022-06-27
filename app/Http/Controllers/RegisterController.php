<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('register.index', [
           'title' => 'Register',
           'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'password' => 'min:5|required|required_with:password_conf|same:password_conf',
            'password_conf' => 'required|min:5'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success', 'Registrasi Berhasil! Silakan Login!');

        return redirect('/login');
    }
}

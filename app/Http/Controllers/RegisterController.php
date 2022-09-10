<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validateDate = $request->validate([
            'name' =>  'required|max:255',
            'username' => ['required', 'min:4', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'

        ]);

        // $validateDate['password'] = bcrypt($validateDate['password']);
        $validateDate['password'] = Hash::make($validateDate['password']);

        User::create($validateDate);

        $request->session()->flash('success', 'registrasi berhasil silakan login!!');


        return redirect('/register');
    }
}

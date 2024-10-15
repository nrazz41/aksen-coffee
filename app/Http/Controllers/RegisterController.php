<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('regis');
    }

    public function regis(Request $request){
        $request->validate([
            'username' => 'required',
            'email' => ['required', 'email'],
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
            ],
            'confirm_password' => [
                'required',
                'same:password', // Validasi untuk memastikan konfirmasi kata sandi sama dengan kata sandi
            ]
        ], [
            'confirm_password.same' => 'Password tidak sama', // Pesan kesalahan khusus
        ]);
        return redirect()->route('halaman-login')->withInput()->with('success', 'Pendaftaran berhasil!');
    }
}

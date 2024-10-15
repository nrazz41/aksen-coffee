<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
            ]
        ]);

        // Cek email dan password
        if (
            $request->email == 'nur23si@mahasiswa.pcr.ac.id' &&
            $request->password == 'Anakduri24'
        ) {
            // Jika login sukses
            return redirect()->route('halaman-home')->withInput();
        } else {
            // Jika login gagal
            // Anda bisa menambahkan session flash message untuk memberi tahu pengguna
            return redirect()->route('halaman-login')->withErrors([
                'login' => 'Email atau password salah.',
            ]);
        }
    }
}

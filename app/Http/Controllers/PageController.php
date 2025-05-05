<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function tampilkanLoginPage()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $validUsername = 'Tiara Salsabella A';
        $validPassword = '12345678';

        $username = $request->input('username');
        $password = $request->input('password');

        $user = [
            'username' => $username,
            'password' => $password,
        ];

        if ($username === $validUsername && $password === $validPassword) {
            session([
                'logged_in' => true,
                'username' => $username,
            ]);

            return redirect()
                ->route('dashboard', ['user' => $user])
                ->with('success', 'Login berhasil!');
        }

        return back()->with('error', 'Username atau password salah!');
    }

    public function logout()
    {
        session()->forget(['logged_in', 'username']);
        return redirect('/login');
    }

    public function tampilkanDashboard(Request $request)
    {
        $user = $request->query('user');
        return view('dashboard', ['user' => $user]);
    }

    public function tampilkanPengelolaan()
    {
        $produkIkan = [
            ['nama' => 'Ikan Koi', 'harga' => 25000, 'stok' => 10],
            ['nama' => 'Ikan Lele', 'harga' => 15000, 'stok' => 25],
            ['nama' => 'Ikan Nila', 'harga' => 18000, 'stok' => 18],
            ['nama' => 'Ikan Cupang', 'harga' => 10000, 'stok' => 40],
        ];

        return view('pengelolaan', ['produkIkan' => $produkIkan]);
    }

    public function tampilkanProfile(Request $request)
    {
        $user = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        return view('profile', ['user' => $user]);
    }
}

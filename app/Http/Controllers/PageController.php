<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginProcess(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $username = $request->input('username');


        if ($request->password === '12345') {
            session(['username' => $username]);
            return redirect()->route('dashboard');
        } else {
            return back()->withErrors(['password' => 'Password salah! Gunakan 12345 untuk login.']);
        }
    }

    public function logout()
    {
        session()->forget('username');
        return redirect()->route('login');
    }

    public function dashboard()
    {
        if (!session('username')) return redirect()->route('login');
        $username = session('username');
        return view('dashboard', compact('username'));
    }

    public function profile()
    {
        if (!session('username')) return redirect()->route('login');
        $username = session('username');

        $profile = [
            'name' => $username,
            'role' => 'Pemilik Studio Foto',
            'email' => strtolower($username) . '@tokofoto.com',
        ];

        return view('profile', compact('username', 'profile'));
    }

    public function pengelolaan()
    {
        if (!session('username')) return redirect()->route('login');

        $items = [
            ['id' => 1, 'nama' => 'Cetak Foto 4R', 'kategori' => 'Cetak', 'harga' => 5000, 'stok' => 120],
            ['id' => 2, 'nama' => 'Album Foto Premium', 'kategori' => 'Album', 'harga' => 75000, 'stok' => 15],
            ['id' => 3, 'nama' => 'Figura A5 Kayu', 'kategori' => 'Figura', 'harga' => 30000, 'stok' => 35],
            ['id' => 4, 'nama' => 'Piala Akrilik', 'kategori' => 'Piala', 'harga' => 160000, 'stok' => 10],
            ['id' => 5, 'nama' => 'Casing Custom Foto', 'kategori' => 'Souvenir', 'harga' => 25000, 'stok' => 50],
        ];

        $totalItems = count($items);
        $totalStock = array_sum(array_column($items, 'stok'));

        return view('pengelolaan', compact('items', 'totalItems', 'totalStock'));
    }
}

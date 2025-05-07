<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        return view('dashboard', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Guest');

        // Data dummy tugas (jika ingin ditampilkan di dashboard)
        $tasks = [
            ['id' => 1, 'judul' => 'Membuat tampilan login', 'status' => 'Selesai'],
            ['id' => 2, 'judul' => 'Integrasi dashboard', 'status' => 'Proses'],
            ['id' => 3, 'judul' => 'Deploy ke server', 'status' => 'Belum Mulai'],
        ];

        return view('pengelolaan', compact('username', 'tasks'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        return view('profile', compact('username'));
    }

    // public function handleLogin(Request $request)
    // {
    //     $username = $request->input('username');
    //     return redirect()->route('dashboard', ['username' => $username]);
    // }
}

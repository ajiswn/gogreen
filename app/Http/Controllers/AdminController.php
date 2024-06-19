<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Artikel;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
    public function login()
    {
        return view('/login');
    }

    public function login_action(Request $request) 
    {
        $request->validate([
            'username'=> 'required',
            'password'=> 'required'
        ]);

        if(Auth::attempt(['username' => $request->username,'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/dasbor');
        }
        return back()->withErrors(['username' => 'Username atau Password salah!']);
    }

    public function dasbor()
    {
        $artikel = Artikel::all()->count();
        $pendaftar = Pendaftaran::all()->count();
        $anggota = Pendaftaran::where('status','Diterima')->count();

        return view('admin.dasbor', compact('artikel', 'pendaftar','anggota'));
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

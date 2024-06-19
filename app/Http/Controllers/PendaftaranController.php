<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendaftaran = Pendaftaran::all();
        return view('admin.pendaftaran', compact('pendaftaran'));
    }

    public function show(string $id)
    {
        $pendaftar = Pendaftaran::findOrFail($id);
        return view('admin.detail_pendaftaran', compact('pendaftar'));
    }

    public function diterima(string $id)
    {
        Pendaftaran::find($id)->update([
            'status' => "Diterima"
        ]);

        return redirect('pendaftaran')->with('success','Pendaftar telah diterima!');
    }

    public function ditolak(string $id)
    {
        Pendaftaran::find($id)->update([
            'status' => "Ditolak"
        ]);
        
        return redirect('pendaftaran')->with('success','Pendaftar telah diterima!');
    }
}

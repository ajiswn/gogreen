<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use Illuminate\Support\Facades\Storage;
use carbon\carbon;
use Session;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikel = Artikel::all();
        return view('admin.artikel', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambah_artikel');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Artikel::create([
            'judul'         => $request->judul,
            'gambar'        => $request->file('gambar')->store('gambar-artikel'),
            'penulis'       => $request->penulis,
            'tanggal'       => Carbon::now()->format('d F Y'),
            'kategori'      => $request->kategori,
            'konten'        => $request->konten,
        ]);

        return redirect('artikel')->with('success','Artikel baru berhasil ditambahkan!');
    }

    public function edit(string $id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('admin.edit_artikel', compact('artikel'));
    }

    public function update(Request $request, string $id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->judul = $request->judul;
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($artikel->gambar) {
                Storage::delete($artikel->gambar);
            }
            // Simpan gambar baru
            $artikel->gambar = $request->file('gambar')->store('gambar-artikel');
        }
        $artikel->tanggal = Carbon::now()->format('d F Y');
        $artikel->penulis = $request->penulis;
        $artikel->kategori = $request->kategori;
        $artikel->konten = $request->konten;

        $artikel->save();
        return redirect('artikel')->with('success','Artikel berhasil diedit!');
    }

    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('admin.detail_artikel', compact('artikel'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artikel = Artikel::findOrFail($id);
        if ($artikel->image) {
            Storage::delete($artikel->gambar);
        }
        $artikel->delete();

        return redirect('artikel')->with('success','Artikel berhasil dihapus!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Pendaftaran;
use Carbon\Carbon;


class GuestController extends Controller
{
    public function index()
    {
        $artikel = Artikel::select('id','judul','gambar','penulis','kategori','tanggal')
                            ->orderBy('created_at','desc')
                            ->take(3)
                            ->get();

        

        return view('index',compact('artikel'));
    }

    public function tentang_kami()
    {
        return view('tentang_kami');
    }
    
    private function hitungKategori() {
        return [
            'berita' => Artikel::where('kategori', 'berita')->count(),
            'kegiatan' => Artikel::where('kategori', 'kegiatan')->count(),
            'artikel' => Artikel::where('kategori', 'artikel')->count()
        ];
    }

    public function artikel()
    {
        $artikel = Artikel::orderBy('updated_at','desc')->get();
        $hitung = $this->hitungKategori();
        return view('artikel', compact('artikel','hitung'));
    }  

    public function detail_artikel(string $id)
    {
        $detail_artikel = Artikel::find($id);
        $artikel = Artikel::orderBy('updated_at','desc')->get();
        $hitung = $this->hitungKategori();
        return view('detail_artikel', compact('detail_artikel','hitung','artikel'));
    }

    public function kategori_artikel(string $var)
    {
        $kategori = Artikel::where('kategori', $var)->get();
        $var = ucfirst($var);
        $artikel = Artikel::orderBy('updated_at','desc')->get();
        $hitung = $this->hitungKategori();

        return view('artikel_kategori', compact('kategori','hitung','var','artikel'));
    }

    public function pendaftaran()
    {
        return view('pendaftaran');
    }

    public function pendaftaran_submit(Request $request)
    {
        $pendaftar = new Pendaftaran();
        $pendaftar->nama = $request->nama;
        $pendaftar->nim = $request->nim;
        $pendaftar->prodi = $request->prodi;
        $pendaftar->fakultas = $request->fakultas;
        $pendaftar->tempat_lahir = $request->tempat_lahir;
        $pendaftar->tgl_lahir = $request->tgl_lahir;
        $pendaftar->angkatan = $request->angkatan;
        $pendaftar->email = $request->email;
        $pendaftar->ktm = $request->file('ktm')->store('ktm-pendaftar');
        $pendaftar->alasan = $request->alasan;
        $pendaftar->twibbon = $request->twibbon;

        $pendaftar->save();

        return redirect('registration')->with('success','Data Anda telah terkirim!');
    }
}

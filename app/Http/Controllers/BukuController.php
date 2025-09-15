<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;   // ✅ penting untuk ambil data kategori
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        // ✅ ambil data buku dan kategori
        $buku     = Buku::all();
        $kategori = Kategori::all();

        // ✅ kirim dua variabel ke view buku.blade.php
        return view('buku', compact('buku', 'kategori'));
    }

    public function create()
    {
        return view('tambah-buku');
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'judul'     => 'required|string|max:255',
            'pengarang' => 'required|string|max:255',
            'penerbit'  => 'required|string|max:255',
        ]);

        Buku::create($validasi);
        return redirect('/buku');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
   
    public function index()
    {
        // Ambil semua data dari tabel kategori
        $kategori = Kategori::all();

        // Kirim ke view resources/views/kategori.blade.php
        return view('kategori', compact('kategori'));
    }

    
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama'      => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        // Simpan data ke tabel kategori
        Kategori::create([
            'nama'      => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        // Kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Kategori berhasil disimpan!');
    }
}

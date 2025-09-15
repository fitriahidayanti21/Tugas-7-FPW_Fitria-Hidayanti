@extends('app')

@section('content')
    <h1>Halaman Page</h1>

    <p>
        Ini adalah halaman <strong>Page</strong> sebagai contoh.  
        Kamu bisa menaruh konten apa saja di sini: teks, gambar, atau tautan.
    </p>

    <h3>Contoh List</h3>
    <ul>
        <li>Informasi singkat aplikasi</li>
        <li>Link ke <a href="{{ url('/buku') }}">Daftar Buku</a></li>
        <li>Link ke <a href="{{ url('/home') }}">Home</a></li>
    </ul>

    <div style="margin-top:20px;">
        <a href="{{ url('/') }}">
            <button>Kembali ke Halaman Utama</button>
        </a>
    </div>
@endsection

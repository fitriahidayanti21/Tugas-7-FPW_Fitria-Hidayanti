@extends('app')

@section('content')
<h1>Tambah Kategori</h1>

@if(session('success'))
   <p style="color:green">{{ session('success') }}</p>
@endif

<form action="{{ route('kategori.store') }}" method="POST">
    @csrf
    <label>Nama Kategori</label>
    <input type="text" name="nama">

    <label>Deskripsi</label>
    <textarea name="deskripsi"></textarea>

    <button type="submit">Simpan</button>
</form>

<hr>

<h3>Daftar Kategori</h3>
<table border="1">
    <tr><th>ID</th><th>Nama</th><th>Deskripsi</th></tr>
    @foreach($kategori as $k)
        <tr>
            <td>{{ $k->id }}</td>
            <td>{{ $k->nama }}</td>
            <td>{{ $k->deskripsi }}</td>
        </tr>
    @endforeach
</table>
@endsection

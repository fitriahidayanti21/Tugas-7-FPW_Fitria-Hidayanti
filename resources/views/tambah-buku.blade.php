@extends('app')

@section('content')
    <h1>Welcome To Tambah Buku Page</h1>
    <form action="{{ route('buku.store') }}" method="POST">
        @csrf
        <div>
            <label for="">Judul</label>
            <input type="text" name="judul" required>
        </div>
        <div>
            <label for="">Pengarang</label>
            <input type="text" name="pengarang" required>
        </div>
        <div>
            <label for="">Penerbit</label>
            <input type="text" name="penerbit" required>
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
@endsection

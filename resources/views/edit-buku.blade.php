@extends('app')

@section('content')
    <h1>Edit Buku</h1>
    <form action="{{ route('buku.update', $buku->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Judul</label>
            <input type="text" name="judul" value="{{ $buku->judul }}">
        </div>
        <div>
            <label>Pengarang</label>
            <input type="text" name="pengarang" value="{{ $buku->pengarang }}">
        </div>
        <div>
            <label>Penerbit</label>
            <input type="text" name="penerbit" value="{{ $buku->penerbit }}">
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
    </form>
@endsection

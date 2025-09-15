@extends('app')

@section('content')
    <h1>Welcome To Buku Page</h1>

    <div>
        <a href="/tambah-buku"><button>Tambah Buku</button></a>
    </div>

    {{-- ===== Tabel Buku ===== --}}
    <h3>Daftar Buku</h3>
    <table border="1">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
            </tr>
        </thead>
        <tbody>
           
            @foreach ($buku as $item)
                <tr>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->pengarang }}</td>
                    <td>{{ $item->penerbit }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <hr>

    {{-- ===== Tabel Kategori ===== --}}

    @if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<form action="{{ route('kategori.store') }}" method="POST">
    @csrf
    <label>Nama Kategori:</label>
    <input type="text" name="nama" required>

    <label>Deskripsi:</label>
    <input type="text" name="deskripsi">

    <button type="submit">Simpan Kategori</button>
</form>

<hr>

    <h3>Daftar Kategori</h3>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategori as $k)
                <tr>
                    <td>{{ $k->id }}</td>
                    <td>{{ $k->nama }}</td>
                    <td>{{ $k->deskripsi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

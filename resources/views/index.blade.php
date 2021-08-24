@extends('layout.master')

@section('content')
    <div class = "container">
        @if(Session::has('pesan'))
            <div>{{ Session::get('pesan') }}</div>
        @endif
        <h4>Data Buku</h4>
        <p align="right"><a href="{{ route('buku.create') }}" class="btn btn-primary btn-sm" >Tambah Buku </a></p>
        <form action="{{ route('buku.search') }}" method="GET">
		    {{ @csrf_field() }}
		    <input type="text" name="name" placeholder="Ingin mencari apa ?" class="form-control"><br>
		    <button type="submit" class="btn btn-primary btn-sm" >Cari</button>
	    </form>
        <br/>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Harga</th>
                    <th>Tgl. Terbit</th>
                    <th>Aksi</th>
                   
                </tr>
            </thead>
            <tbody>
            @foreach ($data_buku as $buku)
            <tr>
                <td>{{ ++$no }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>{{ number_format($buku->harga, 0, ',', '.') }}</td>
                <td>{{ $buku->tgl_terbit->format('d/m/Y') }}</td>
                <td><a href="{{ route('buku.edit', $buku->id) }}" method="get" class="btn btn-primary btn-sm">Edit</a>@csrf
                    <a href="{{ route('buku.destroy', $buku->id) }}" method="get" class="btn btn-danger btn-sm" onClick="return confirm('Yakin mau dihapus?')">Hapus</a>@csrf
                </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div>Jumlah Buku: {{ $jumlah_buku }}</div>
        <div>{{ $data_buku->links() }}</div>
    </div>
@endsection
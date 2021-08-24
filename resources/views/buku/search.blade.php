@extends('layout.master')

@section('content')

    @if(count($data_buku))
    <div class = "container">
        <div>Ditemukan {{ count($data_buku) }} data dengan kata: {{ $cari }}</div>
        @if(Session::has('pesan'))
            <div>{{ Session::get('pesan') }}</div>
        @endif
        <h4>Data Buku</h4>
        <p align="right"><a href="{{ route('buku.create') }}" class="btn btn-primary btn-sm" >Tambah Buku </a></p>
        <form action="{{ route('buku.search') }}" method="get">@csrf
            <input type="text" nama="kata" placeholder="Cari ...">
        </form>
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
                <td><form action="{{ route('buku.edit', $buku->id) }}" method="get">@csrf
                    <button class="btn btn-primary btn-sm">Edit</button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('buku.destroy', $buku->id) }}" method="post">@csrf
                    <button onClick="return confirm('Yakin mau dihapus?')" class="btn btn-primary btn-sm">Hapus</button>
                </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div>{{ $data_buku->links() }}</div>
        @else
            <div><h4>Data {{ $cari }} tidak ditemukan</h4>
            <a href="/buku">Kembali</a></div>
        @endif
    </div>
@endsection
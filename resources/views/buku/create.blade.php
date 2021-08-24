@extends('layout.master')

@section('content')

    
    <div class="container">
        <h4>Tambah Buku</h4>
		@if (count($errors)>0)
			<ul class="alert alert-danger">
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		@endif
		
        <form method="post" action="{{ route('buku.store') }}">
        @csrf
        
        <div class="form-group row">
		    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
		    <div class="col-sm-10">
			    <input type="text" class="form-control" name="judul" placeholder="Judul Buku">
            </div>
		</div>
        <br/>
	    <div class="form-group row">
		    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
		    <div class="col-sm-10">
			    <input type="text" class="form-control" name="penulis" placeholder="Penulis">
            </div>
		</div>
        <br/>
        <div class="form-group row">
		    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
		    <div class="col-sm-10">
			    <input type="text" class="form-control" name="harga" placeholder="Harga">
            </div>
		</div>
        <br/>
        <div class="form-group row">
		    <label for="tgl_terbit" class="col-sm-2 col-form-label">Tanggal Terbit</label>
		    <div class="col-sm-10">
			    <input type="date" class="form-control" name="tgl_terbit">
                </div>
		</div>
        <br/>
	    <div>
	        <button type="submit" class="btn btn-primary">Simpan</button>
	        <a href="/buku" button type="submit" class="btn btn-primary">Batal</button></a>
        </div>
    </div>
@endsection



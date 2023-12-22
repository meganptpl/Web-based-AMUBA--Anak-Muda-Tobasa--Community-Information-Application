@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tambah Sumbangan</h2>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ups!</strong> Ada kesalahan inputan<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

	@if(Auth::check())
    <form action="{{ route('sumbangan.store') }}" method="POST" enctype="multipart/form-data">
    	@csrf
        <div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Nama Penyumbang:</strong>
					<input type="text" name="nama" class="form-control" placeholder="Nama Penyumbang.." value="{{ auth()->user()->name }}" readonly>
				</div>
			</div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Alamat:</strong>
		            <input type="text" name="alamat" class="form-control" placeholder="Alamat..">
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>No Telepon:</strong>
		            <input type="number" name="notelp" class="form-control" placeholder="Nomor Telepon..">
		        </div>
		    </div>
			<div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
						<label for="kategori" class="col-form-label">Jenis</label>
                        <select class="form-control" id="jenis" name="jenis">
                            <option value="Barang">Barang</option>
                            <option value="Uang">Uang</option>
                        </select>
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Jumlah:</strong>
                    <input type="number" name="jumlah" class="form-control" placeholder="Jumlah Sumbangan..">
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Bukti Sumbangan:</strong>
		            <input type="file" name="gambar" class="form-control" placeholder="Gambar">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>
    </form>
	@else
    <form action="{{ route('sumbangan.store') }}" method="POST" enctype="multipart/form-data">
    	@csrf
        <div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Nama Penyumbang:</strong>
					<input type="text" name="nama" class="form-control" placeholder="Nama Penyumbang..">
				</div>
			</div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Alamat:</strong>
		            <input type="text" name="alamat" class="form-control" placeholder="Alamat..">
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>No Telepon:</strong>
		            <input type="number" name="notelp" class="form-control" placeholder="Nomor Telepon..">
		        </div>
		    </div>
			<div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
						<label for="kategori" class="col-form-label">Jenis</label>
                        <select class="form-control" id="jenis" name="jenis">
                            <option value="Barang">Barang</option>
                            <option value="Uang">Uang</option>
                        </select>
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Jumlah:</strong>
                    <input type="number" name="jumlah" class="form-control" placeholder="Jumlah Sumbangan..">
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Bukti Sumbangan:</strong>
		            <input type="file" name="gambar" class="form-control" placeholder="Gambar">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>
    </form>
	@endif

@endsection

@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tambah galeri</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('galeri.index') }}">Kembali</a>
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


    <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
    	@csrf
         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Judul:</strong>
		            <input type="text" name="judul" class="form-control" placeholder="Judul..">
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Tanggal:</strong>
		            <input type="date" name="tanggal" class="form-control" placeholder="Tanggal..">
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Tempat:</strong>
		            <input type="text" name="tempat" class="form-control" placeholder="Nama Tempat..">
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Gambar Galeri:</strong>
		            <input type="file" name="gambar" class="form-control" placeholder="Gambar">
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Deskripsi:</strong>
		            <textarea class="form-control" style="height:150px" name="deskripsi" placeholder="deskripsi"></textarea>
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>
    </form>


@endsection

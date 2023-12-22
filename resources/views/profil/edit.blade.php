@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit profil</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('profil.index') }}">Kembali</a>
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


    <form action="{{ route('profil.update',$profil->id) }}" method="POST" enctype="multipart/form-data">
    	@csrf
        @method('PUT')


        <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Nama:</strong>
		            <input type="text" name="nama" value="{{ $profil->nama }}" class="form-control" placeholder="Nama..">
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Jabatan:</strong>
		            <input type="text" name="jabatan" class="form-control" placeholder="Jabatan.." value="{{ $profil->jabatan }}">
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Gambar profil:</strong>
		            <input type="file" name="gambar" class="form-control" placeholder="Gambar">
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Motivasi:</strong>
		            <textarea class="form-control" style="height:150px" name="motivasi" placeholder="motivasi" value="{{ $profil->motivasi }}"></textarea>
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		      <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>


    </form>

@endsection
@extends('layouts.app')


@section('content')
<div class="container">
    <div class="card border-success">
            <div class="card-header bg-success text-white">
                <h4 style="font-family: 'Fredoka One', cursive; color:aliceblue"><i class="fa fa-database"></i> Informasi Baru</h4>
            </div>
            @foreach($informasis as $informasi)
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <h3>{{$informasi->judul}}</h3>
                        <p>{{$informasi->tempat}}, {{$informasi->tanggal}}</p>
                        <img src="{{asset('asset/gambar/'.$informasi->gambar)}}" style="width:350px;height:350px;">
                        <p>{{$informasi->deskripsi}}</p>
                        
                        </div>
                </div>
            </div>
            @endforeach
    <a href="{{ url('/') }}" class="btn btn-success m-2">Kembali</a>
</div>
@endsection

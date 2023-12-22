@extends('layouts.app')


@section('content')
<div class="container">
    <div class="card border-success">
            <div class="card-header bg-success text-white">
                <strong><i class="fa fa-database"></i> Lihat Detail informasi</strong>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th></th>
                                <td><img src="{{asset('asset/gambar/'.$informasi->gambar)}}" style="width:450px;height:400px;"></td>
                            </tr>
                            <tr>
                                <th>Judul</th>
                                <td>{{$informasi->judul}}</td>
                            </tr>     
                            <tr>
                                <th>Tempat</th>
                                <td colspan="3">{{$informasi->tempat}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal</th>
                                <td>{{$informasi->tanggal}}</td>
                            </tr>   
                            <tr>
                                <th>Deskripsi</th>
                                <td>{{$informasi->deskripsi}}</td>
                            </tr>   
                        </table>
                    </div>
                </div>
            </div>
    <a href="{{ route('informasi.index') }}" class="btn btn-success m-2">Kembali</a>
</div>
@endsection

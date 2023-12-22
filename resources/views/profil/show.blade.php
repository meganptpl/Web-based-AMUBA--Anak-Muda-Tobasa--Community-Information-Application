@extends('layouts.app')


@section('content')
<div class="container">
    <div class="card border-success">
            <div class="card-header bg-success text-white">
                <strong><i class="fa fa-database"></i> Lihat Detail profil</strong>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th></th>
                                <td><img src="{{asset('asset/gambar/'.$profil->gambar)}}" style="width:450px;height:400px;"></td>
                            </tr>   
                            <tr>
                                <th>Nama</th>
                                <td>{{$profil->nama}}</td>
                            </tr>     
                            <tr>
                                <th>Jabatan</th>
                                <td colspan="3">{{$profil->jabatan}}</td>
                            </tr>
                            <tr>
                                <th>Motivasi</th>
                                <td>{{$profil->motivasi}}</td>
                            </tr>   
                        </table>
                    </div>
                </div>
            </div>
    <a href="{{ route('profil.index') }}" class="btn btn-success m-2">Kembali</a>
</div>
@endsection

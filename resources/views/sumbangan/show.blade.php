@extends('layouts.app')


@section('content')
<div class="container">
    <div class="card border-success">
            <div class="card-header bg-success text-white">
                <strong><i class="fa fa-database"></i> Lihat Detail Informasi</strong>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Nama</th>
                                <td>{{$informasi->nama}}</td>
                            </tr>     
                            <tr>
                                <th>Nama Tempat</th>
                                <td colspan="3">{{$informasi->tempat}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal</th>
                                <td>{{$informasi->tanggal}}</td>
                            </tr>   
                        </table>
                    </div>
                </div>
            </div>
    <a href="{{ route('informasi.index') }}" class="btn btn-success m-2">Kembali</a>
</div>
@endsection

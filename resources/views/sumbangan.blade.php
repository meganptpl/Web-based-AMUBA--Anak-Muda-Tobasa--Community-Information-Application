@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" style="center">
                <h2 style="font-family: 'Outfit', sans-serif;"><center>Tambah Sumbangan</h2>
				<p><center>Untuk tempat pengumpulan donasi barang dapat dikumpulkan di : SSC Balige </p>
				<p><center>Untuk pengumpulan donasi uang dapat dikumpulkan di no rekening : 7798 0101 0920 533 (A.N David) </p>
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

    <form action="{{ url('tambah') }}" method="POST" enctype="multipart/form-data">
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
						<label for="kategori" class="col-form-label">Jenis:</label>
                        <select class="form-control" id="jenis" name="jenis">
                            <option value="Barang">Barang</option>
                            <option value="Uang">Uang</option>
                        </select>
		        </div>
		    </div>
			<div class="col-xs-12 col-sm-12 col-md-12">
					<div id="inputUang">
					<div class="form-group">
						<strong>Jumlah:</strong>
						<input type="number" name="uang" id="uang" class="form-control" placeholder="Jumlah Uang (minimal 10.000).." min="10000">
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
					<div id="inputBarang">
					<div class="form-group">
						<strong>Jumlah:</strong>
						<input type="number" name="barang" id="barang" class="form-control" placeholder="Jumlah Barang(minimal 10).." min="10">
					</div>
				</div>
			</div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Bukti Sumbangan:</strong>
		            <input type="file" name="gambar" class="form-control" placeholder="Gambar">
		        </div>
		    </div>
		    <div class="col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Donasikan</button>
		    </div>
		</div>
    </form>
	<div class="container">
		<footer class="py-3 my-4 ">
			<div class="border-bottom" ></div><br>
			<p class="text-center text-muted ">&copy; Komunitas AMUBA 2022</p>
		</footer>
	</div>
@endsection
@section('custom_js')
<script>
	$(document).ready(function() {
		let jenis = $('#jenis');
		$('#inputUang').hide();
		$(jenis).change(function(){
			if(jenis.val() == 'barang'){
				$('#inputUang').toggle();
				$('#uang').val(" ");
				$('#barang').val(" ");
				$('#inputBarang').toggle();
			}else{
				$('#inputBarang').toggle();
				$('#uang').val(" ");
				$('#barang').val(" ");
				$('#inputUang').toggle();
			}
		});
	});
</script>
@endsection
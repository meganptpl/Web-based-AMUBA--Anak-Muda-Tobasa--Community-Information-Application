@extends('layouts.app')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide rev_slider_wrapper" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="asset/gambar/about-us.jpg" alt="First slide" style="width: 100%;height:300px;">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="asset/gambar/logo.jpg" alt="Second slide" style="width: 100%;height:300px;">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="asset/gambar/Tukang-informasi-Elektronik.png" alt="Second slide" style="width: 100%;height:300px;">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="asset/gambar/logo2.jpg" alt="Second slide" style="width: 100%;height:300px;">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><br><br>
<div class="container">
  <div class="container clearfix mt-2">
        @foreach($informasis as $informasi)
        <article class="portfolio-item pf-media">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><i class="bi bi-tv"></i>{{ $informasi->judul}} </h5>
                  <p class="card-text">{{$informasi->tanggal}}</p>
                  <p class="card-text">{{$informasi->tempat}}</p>
                  <a href="{{ url('/lihat/'.$informasi->id)}}" class="float-right" style="color: #37b87c;"><b> Detail >></b></a>
              </div>
            </div> 
        </article>
        @endforeach
    </div>
</div>

<div class="container">
    <footer class="py-3 my-4 ">
        <div class="border-bottom" ></div><br>
        <p class="text-center text-muted ">&copy; Komunitas AMUBA 2022</p>
    </footer>
</div>
@endsection
@section('custom_js')
<script type="text/javascript">
    function load_kategori(){
       let data = $('#form_filter').serialize();
       location.href = '?' + data;
    }
    function open_modal(id)
    {
        $(id).modal('show');
    }
</script>
@endsection

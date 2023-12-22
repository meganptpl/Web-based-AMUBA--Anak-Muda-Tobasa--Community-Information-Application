@extends('layouts.app')

@section('content')
<div id="content_list">
    <link href="footers.css" rel="stylesheet">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <div id="carouselExampleIndicators" class="carousel slide rev_slider_wrapper" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="asset/gambar/1.jpg" alt="First slide" style="width: 100%;height:300px;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="asset/gambar/2.jpg" alt="Second slide" style="width: 100%;height:300px;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="asset/gambar/3.jpg" alt="Second slide" style="width: 100%;height:300px;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="asset/gambar/4.jpg" alt="Second slide" style="width: 100%;height:300px;">
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
    <center><h2 style="font-family: 'Outfit', sans-serif;">Informasi Terbaru</h2></center>
    <hr><br>
    <div id="list_result"></div>
</div>
    <div class="container">
        <footer class="py-3 my-4 ">
            <div class="border-bottom" ></div><br>
            <p class="text-center text-muted ">&copy; Komunitas AMUBA 2022</p>
        </footer>
    </div>
</div>
@endsection
@section('custom_js')
<script type="text/javascript">
    load_list(1);
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

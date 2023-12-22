<!DOCTYPE html>
<html lang="en">

<head>

	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Amuba</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="icon" href="asset/gambar/download (2).jpg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">

    {{-- <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css"> --}}
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--GRAFIK PENGGUNA TERDAFTAR PERBULAN-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/styleku.css')}}" type="text/css"/>
	<link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css"/>
	<link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css"/>
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css"/>
	<link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css"/>
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css"/>
	<link rel="stylesheet" href="{{asset('css/toastr.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/proyek.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/loginLanding.css')}}" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>Amuba</title>

	<style>

		.revo-slider-emphasis-text {
			font-size: 58px;
			font-weight: 700;
			letter-spacing: 1px;
			font-family: 'Raleway', sans-serif;
			padding: 15px 20px;
			border-top: 2px solid #FFF;
			border-bottom: 2px solid #FFF;
		}

		.revo-slider-desc-text {
			font-size: 20px;
			font-family: 'Lato', sans-serif;
			width: 650px;
			text-align: center;
			line-height: 1.5;
		}

		.revo-slider-caps-text {
			font-size: 16px;
			font-weight: 400;
			letter-spacing: 3px;
			font-family: 'Raleway', sans-serif;
		}

		.tp-video-play-button { display: none !important; }

		.tp-caption { white-space: nowrap; }

        #top-search-input {
        float: right;
        margin: 33px 0 33px 15px;
        -webkit-transition: margin .4s ease;
        -o-transition: margin .4s ease;
        transition: margin .4s ease;
        }

        #top-search-input form {
            width: 160px;
            height: 34px;
            padding: 0;
            margin: 0;
        }

        #header.sticky-header #top-search-input { margin: 13px 0 13px 15px; }

        @media (max-width: 991px) {

            #top-search-input {
                float: none;
                margin: 20px 0;
            }

            #top-search-input form {
                margin: 0 auto;
                width: 300px;
            }

        }

        .device-sm #top-search-input form { width: 100%; }
        
        .container{
            
        }

	</style>

</head>
<body>
<main class="d-flex align-items-center min-vh-100 py-3 py-md-0 ">
<div class="container">
      <div class="card login-card">
        <div class="row no-gutters justify-content-center">
          
          <div class="col-md-7">
            <div class="card-body">

              <div class="brand-wrapper">
                <p></p>
                <span class="brand-name"><a href="{{ url('/') }}" style="font-family: Lobster; font-weight: bold; font-size:50px; color: green; text-decoration:none;"><center>Amuba</center></span></a></span>
              </div>
              <h3 class="login-card-description"><center>Silahkan mendaftar ke akun anda sebagai Member</center></h3>
              <!--Form Login-->
              
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
                @endif
                <center>
                <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                          <label for="name" class="sr-only">{{ __('E-Mail Address') }}</label>
                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="width:100%;" placeholder="Nama Lengkap">
                            @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                        </div>
                        <div class="form-group">
                            <label for="notelp" class="sr-only">{{ __('E-Mail Address') }}</label>
                            <input id="notelp" type="number" class="form-control @error('notelp') is-invalid @enderror" name="notelp" value="{{ old('notelp') ? old('notelp') : '' }}" required autocomplete="notelp" autofocus style="width:100%;"placeholder="No.WhatsApp" >
                              @error('notelp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                          </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="width:100%;" placeholder="Email">
                              @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                          </div>
                         <div class="form-group mb-4">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"  placeholder="***********">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                          </div>
                          <div class="form-group mb-4">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"  placeholder="***********">
                          </div>
                          <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success login-btn mb-4" style="background-color:#28a745; width:100%;">
                                    {{ __('Daftar') }}
                                </button>
                                <p class="login-card-footer-text">Sudah punya akun? <a href="{{ route('login') }}" class="text-reset" style="color:blue;"><b>Login disini</b>  </a> <br>Kembali Ke  <a href="{{ url('/') }}" class="text-reset" style="color:blue;"><b>Beranda</b></a></p>
                            </div>
                        </div>
                    </form>
                </center>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>
</body>
</html>

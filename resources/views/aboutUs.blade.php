@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>About Us</title>   
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}"> 
</head>

<body>
    <div class="baris">
        <div class="profile-container">
            <div class="img-container">
                <img src="asset/gambar/luana.jpg" alt="profile image">
            </div>
            <p class="info full-name">Luana - 11321021</p>
            <p class="info role">
                <i class="fas fa-star"></i> Programmer
            </p>
            <p class="info place">
                <i class="fas fa-map-marker-alt"></i> Tarutung, Sumut
            </p>

            <div class="social-container">
            <button class="youtube">
                <a target="_blank" href="https://www.youtube.com/channel/UCQbISFmEVf8TdmrQk2RFi0Q" class="fab fa-youtube tombolsosmed"></a>
            </button>
            <button class="linkedin">
                <a target="_blank" href= "https://www.linkedin.com/in/luana-breka-banjarnahor-569422222/" class="fab fa-linkedin-in tombolsosmed"></a>
            </button>
                <button class="instagram">
                <a target="_blank" href="https://www.instagram.com/luanabreka/" class="fab fa-instagram tombolsosmed"></a>
            </button>
            <button class="facebook">
               <a target="_blank" href="https://web.facebook.com/luana.manuella.528" class="fab fa-facebook tombolsosmed"></a>
            </button>
            </div>

            <button class="action message"><a href="https://wa.me/6282276021161" class="tombolsosmed">Message</a></button>
        </div>


        <div class="profile-container">
            <div class="img-container">
                <img src="asset/gambar/albert.jpeg" alt="profile image">
            </div>
            <p class="info full-name">Albert -11321031</p>
            <p class="info role">
                <i class="fas fa-star"></i> Design UI
            </p>
            <p class="info place">
                <i class="fas fa-map-marker-alt"></i> Porsea, Sumut
            </p>

            <div class="social-container">
            <button class="youtube">
                <a target="_blank" href="https://www.youtube.com/channel/UCTI6bZX-B8ysfvEl3Y_9-aQ" class="fab fa-youtube tombolsosmed"></a>
            </button>
            <button class="linkedin">
                <a target="_blank" href= "https://www.linkedin.com/in/albert-aritonang-95a82a171/" class="fab fa-linkedin-in tombolsosmed"></a>
            </button>
                <button class="instagram">
                <a target="_blank" href="https://www.instagram.com/albertaritonang11/" class="fab fa-instagram tombolsosmed"></a>
            </button>
            <button class="facebook">
                <a target="_blank" href="https://web.facebook.com/alberth.rafael.71" class="fab fa-facebook tombolsosmed"></a>
            </button>
            </div>

            <button class="action message"><a href="https://wa.me/62878995702165" class="tombolsosmed">Message</a></button>
        </div>


        <div class="profile-container">
            <div class="img-container">
                <img src="asset/gambar/ester.png" alt="profile image">
            </div>
            <p class="info full-name">Ester - 11321054</p>
            <p class="info role">
                <i class="fas fa-star"></i> Data Analyst
            </p>
            <p class="info place">
                <i class="fas fa-map-marker-alt"></i> Porsea, Sumut
            </p>

            <div class="social-container">
                <button class="youtube">
                <a target="_blank" href="https://www.youtube.com/channel/UClrbrRyBtxEacP-CkMdRPNA" class="fab fa-youtube tombolsosmed"></a>
            </button>
                <button class="linkedin">
                <a target="_blank" href="https://www.linkedin.com/in/ester-sinaga-263967235/" class="fab fa-linkedin-in tombolsosmed"></a>
            </button>
                <button class="instagram">
                <a target="_blank" href="https://www.instagram.com/ester_sinaga_/?hl=id" class="fab fa-instagram tombolsosmed"></a>
            </button>
                <button class="facebook">
                <a target="_blank" href="" class="fab fa-facebook tombolsosmed"></a>
            </button>
            </div>

            <button class="action message"><a href="https://wa.me/6285260617206" class="tombolsosmed">Message</a></button>
        </div>


        <div class="profile-container">
            <div class="img-container">
                <img src="asset/gambar/megaria.jpeg" alt="profile image">
            </div>
            <p class="info full-name">Mega - 11321058</p>
            <p class="info role">
                <i class="fas fa-star"></i> Data Analyst
            </p>
            <p class="info place">
                <i class="fas fa-map-marker-alt"></i> Pekanbaru, Riau
            </p>


            <div class="social-container">
                <button class="youtube">
                <a target="_blank" href=" https://www.youtube.com/channel/UCQGFWx-7j1hVYVNv0IK9ZoQ" class="fab fa-youtube tombolsosmed"></a>
            </button>
                <button class="linkedin">
                <a target="_blank" href="  https://www.linkedin.com/in/megaria-napitupulu-577705227/" class="fab fa-linkedin-in tombolsosmed"></a>
            </button>
                <button class="instagram">
                <a target="_blank" href="https://www.instagram.com/meganptpl/" class="fab fa-instagram tombolsosmed"></a>
            <button class="facebook">
                <a target="_blank" href="  https://www.facebook.com/indah.ria.378/" class="fab fa-facebook tombolsosmed"></a>
            </button>
            </div>

            <button class="action message"><a href="https://wa.me/6281267420245" class="tombolsosmed">Message</a></button>
        </div>
    </div>
</body>

</html>
@endsection
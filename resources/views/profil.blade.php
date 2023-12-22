@extends('layouts.app')

@section('content')
<div class="jumbotron" style="background-color: darkseagreen">
    <center>
    <h1 class="display-4">Hallo Anak Muda Toba</h1>
    <p class="lead">Selamat datang di website Komunitas AMUBA </p>
    <p>Penghubung jiwa-jiwa muda</p>
    <a class="btn btn-lg" href="{{ route('register') }}" role="button" style="background-color: bisque">BERGABUNG SEKARANG</a>
    </center>
</div>

<a href="./css/stylee.css"></a>

<div class="faq_area section_padding_130" id="faq">
    <div class="container">
        <div class="row justify-content-center">
            <h2 style="font-family: 'Fredoka One', cursive;">Sekilas Tentang Komunitas AMUBA</h2> <br><br>
            <!-- FAQ Area-->
            <div class="col-12  ">
                <div class="accordion faq-accordian" id="faqAccordion">
                    <div class="card border-0 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="card-header" id="headingOne">
                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Apa itu AMUBA?<span class="lni-chevron-up"></span></h6>
                        </div>
                        <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#faqAccordion">
                            <div class="card-body">
                                <p>AMUBA adalah singkatan dari Anak Muda Batak Tobasa yang terbentuk dari beberapa orang muda 
                                    dengan berbagai macam latar belakang yang berbeda-beda ( pelajar dan pekerja ). 
                                    Berawal dari sebuah grup whatsapp, melakukan kegiatan meet up dan berlanjut menjadi sebuah komunitas yang akan bergerak di kegiatan sosial.
                                </p>
                                <p>
                                    Amuba akan terus melakukan kegiatan bermanfaat seperti kegiatan sosial, kegiatan cinta budaya 
                                    dan kegiatan peduli alam sekitar yang tentu akan bermanfaat untuk Lingkungan bonapasogit tercinta.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="card-header" id="headingTwo">
                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Apa inspirasi terbentuknya komunitas AMUBA?<span class="lni-chevron-up"></span></h6>
                        </div>
                        <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                            <div class="card-body">
                               <p> Inspirasi terbentuknya Komunitas AMUBA ini karena adanya rasa sosial yang tinggi dimiliki oleh Anak Muda Tobasa yang ingin membantu dan juga bersosialisasi dengan masyarakat Tobasa.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="card-header" id="headingThree">
                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Kegiatan apa saja yang dilakukan komunitas AMUBA?<span class="lni-chevron-up"></span></h6>
                        </div>
                        <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#faqAccordion">
                            <div class="card-body">
                                <p>Banyak kegiatan yang dilakukan oleh Komunitas AMUBA ini mulai dari kegiatan sosial, kegiatan kerja bakti dan juga kegiatan pendidikan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <div class="card-header" id="headingFive">
                            <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">Apa visi dan misi komunitas AMUBA?<span class="lni-chevron-up"></span></h6>
                        </div>
                        <div class="collapse" id="collapseFive" aria-labelledby="headingFive" data-parent="#faqAccordion">
                            <div class="card-body">
                                <p>Visi : Menciptakan jiwa generasi muda yang terampil, berahklak, berkualitas, mandiri dan dapat mempererat tali persaudaraan antar pemuda Tobasa agar dapat meningkatkan kepedulian kepada sesama dan lingkungan.</p>
                                <p>Misi : Membentuk jiwa yang peduli terhadap sesama dan lingkungan, Melakukan kegiatan sosial yang bermanfaat bagi masyarakat, Membangun tali persaudaraan antar anggota, Mengembangkan kreativitas serta bakat pemuda melalui kegiatan yang dilakukan, Turut menjaga dan melestarikan lingkungan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div>&nbsp;</div>


   
  <div>&nbsp;</div>
  <div class="container">
    <div class="container clearfix mt-3">
        <center><h2 style="font-family: 'Fredoka One', cursive;">Anggota Komunitas AMUBA</h2></center>
          @foreach($profils as $item)
          <article class="portfolio-item pf-media">
              <div class="card">
                  <div class="card-body">
                    <img src="{{asset('asset/gambar/'.$item->gambar)}}" style="width:300px;height:200px;">
                    <h5 class="card-title center"><i class="bi bi-tv"></i>{{ $item->nama }} </h5>
                    <p class="card-text center">{{ $item->jabatan }}</p>
                    <p class="card-text center">{{ $item->motivasi }}</p>
                </div>
              </div> 
          </article>
          @endforeach
      </div>
    </div>
</div>
<div class="container">
    <footer class="py-3 my-4 ">
        <div class="border-bottom" ></div><br>
        <p class="text-center text-muted ">&copy; Komunitas AMUBA 2022</p>
    </footer>
</div>
@endsection



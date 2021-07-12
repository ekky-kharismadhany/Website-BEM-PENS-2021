@extends('layout.app')
@section('body')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">BEM PENS 2021</h1>
        <h2 data-aos="fade-up" data-aos-delay="400">Gerakan Perubahan Beri Pembaharuan</h2>
        <div data-aos="fade-up" data-aos-delay="600">
          <div class="text-center text-lg-start">
            <a href="/berita" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Berita Terkini</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="{{asset('img/arasaris/yaArtboard 1ARIS.png')}}" class="img-fluid" alt="Logo Aris 1">
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">
  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h3>Menyambut Angin Baru</h3>
            <h2>Pesan Presiden BEM PENS 2021</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio perspiciatis similique possimus aliquam hic corrupti doloribus modi animi? Quaerat tempore esse quasi tenetur sint ea voluptatum dolor optio officiis dolore?
            </p>
            <div class="text-center text-lg-start">
              <a href="/profil" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Profil Kabinet</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{asset('img/arasaris/yaArtboard 5ARAS.png')}}" class="img-fluid" alt="Logo Aras">
        </div>

      </div>
    </div>

  </section><!-- End About Section -->

  <!-- ======= Values Section ======= -->
  <section id="values" class="values">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Visi & Misi</h2>
        <p>Langkah Nyata KM PENS dalam berdedikasi untuk PENS dan Indonesia</p>
      </header>

      <div class="row">

        <div class="col-lg-3">
          <div class="box" data-aos="fade-up" data-aos-delay="200">
            <h3>Misi 1</h3>
            <p>Penguatan Internal BEM PENS yang Profesional dan Loyalitas</p>
          </div>
        </div>

        <div class="col-lg-3 mt-4 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="400">
            <h3>Misi 2</h3>
            <p>Pelayanan Optimal</p>
          </div>
        </div>

        <div class="col-lg-3 mt-4 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="600">
            <h3>Misi 3</h3>
            <p>Mahasiswa Sejahtera</p>
          </div>
        </div>
        <div class="col-lg-3 mt-4 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="600">
            <h3>Misi 4</h3>
            <p>Mahasiswa Bergerak</p>
          </div>
        </div>

      </div>

    </div>

  </section><!-- End Values Section -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">
      <header class="section-header">
        <h2>Kementerian dan Badan</h2>
        <p>BEM PENS 2021</p>
      </header>
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-box blue">
            <i class="icon"><img alt="Logo Cakra Gaharu" src="{{asset('img/logo-kementerian/Logo Cakra Gaharu.png')}}" width="64" height="64"></img></i>
            <h3>Badan Koordinasi Pemandu</h3>
            <p>Badan Koordinasi Pemandu bertugas dan bertanggung jawab atas segala bentuk kepemanduan di PENS</p>
            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-box orange">
            <i class="icon"><img alt="Logo Cakra Gaharu" src="{{asset('img/logo-kementerian/Logo Cakra Gaharu.png')}}" width="64" height="64"></img></i>
            <h3>Badan Pengurus Harian</h3>
            <p>Bada Pengurus Harian bertugas dan bertanggung jawab atas arah kebijakan organisasi, administrasi, dan keuangan BEM PENS</p>
            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-box green">
            <i class="icon"><img alt="Logo Cakra Gaharu" src="{{asset('img/logo-kementerian/Logo Cakra Gaharu.png')}}" width="64" height="64"></img></i>
            <h3>Badan Koordinasi FKMPI</h3>
            <p>Badan Koordinasi FKMPI dalam koordinasi Forum Komunikasi Mahasiswa Politeknik se-Indonesia (FKMPI)</p>
            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-box red">
            <i class="icon"><img alt="Logo Kementerian Ristek" src="{{asset('img/logo-kementerian/Logo Ristek.png')}}" width="64" height="64"></img></i>
            <h3>Kementerian Riset dan Teknologi</h3>
            <p>Kementerian Riset dan Teknologi bergerak pada bidang karya dan prestasi mahasiswa</p>
            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-box purple">
            <i class="icon"><img alt="Logo Kementerian Perkom" src="{{asset('img/logo-kementerian/Logo Perkom.png')}}" width="64" height="64"></img></i>
            <h3>Kementerian Perekonomian</h3>
            <p>Kementerian Perekonomian bergerak untuk mengembangkan minat dan potensi mahasiswa KM PENS di bidang kreatif</p>
            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
          <div class="service-box pink">
            <i class="icon"><img alt="Logo Kementerian Dagri" src="{{asset('img/logo-kementerian/Logo Dagri.png')}}" width="64" height="64"></img></i>
            <h3>Kementerian Dalam Negeri</h3>
            <p>Kementerian Dalam Negeri bergerak di bidang internal dan koordinasi antar ormawa di PENS</p>
            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-box red">
            <i class="icon"><img alt="Logo Kementerian Lugri" src="{{asset('img/logo-kementerian/Logo Lugri.png')}}" width="64" height="64"></img></i>
            <h3>Kementerian Luar Negeri</h3>
            <p>Kementerian Luar Negeri menaungi hubungan dengan organisasi eksternal dan branding KM PENS</p>
            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-box purple">
            <i class="icon"><img alt="Logo Kementerian Sosmas" src="{{asset('img/logo-kementerian/Logo Sosmas.png')}}" width="64" height="64"></img></i>
            <h3>Kementerian Sosial Masyarakat</h3>
            <p>Kementerian Sosial Masyarakat bertugas meningkatkan kepekaan dan kepedulian mahasiswa terhadap permasalahan sosial</p>
            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
          <div class="service-box pink">
            <i class="icon"><img alt="Logo Kementerian Sosbang" src="{{asset('img/logo-kementerian/Logo Sosbang.png')}}" width="64" height="64"></img></i>
            <h3>Kementerian Sosial Kebangsaan</h3>
            <p>Kementerian Sosial Kebangsaan yang mengawal dan mengkaji kebijakan pemerintah dan dinamika masyarakat</p>
            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-box red">
            <i class="icon"><img alt="Logo Kementerian Kesma" src="{{asset('img/logo-kementerian/Logo Kesma.png')}}" width="64" height="64"></img></i>
            <h3>Kementerian Kesejahteraan Mahasiswa</h3>
            <p>Kementerian Kesejahteraan Mahasiswa bergerak di bidang informasi mengenai kebijakan kampus dan penghubung manajemen dan mahasiswa</p>
            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-box purple">
            <i class="icon"><img alt="Logo Kementerian PSDM" src="{{asset('img/logo-kementerian/PSDM.png')}}" width="64" height="64"></img></i>
            <h3>Kementerian Pengembangan Sumber Daya Mahasiswa</h3>
            <p>Kementerian Pengembangan Sumber Daya Mahasiswa berperan mengembangkan potensi mahasiswa PENS agar berdaya saing dan berkualitas</p>
            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
          <div class="service-box pink">
            <i class="icon"><img alt="Logo Kementerian Kominfo" src="{{asset('img/logo-kementerian/Logo Kominfo.png')}}" width="64" height="64"></img></i>
            <h3>Kementerian Komunikasi dan Informasi</h3>
            <p>Kementerian Komunikasi dan Informasi bertugas sebagai penyebar informasi dan peningkatan citra positif BEM PENS</p>
            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

    </div>

  </section><!-- End Services Section -->
  <section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Berita</h2>
        <p>Kanal Berita BEM PENS</p>
      </header>

      <div class="row">
      @foreach($articles as $article)
        <div class="col-lg-4">
          <div class="post-box">
            <!-- <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt=""></div> -->
            <span class="post-date">{{$article->created_at}}</span>
            <h3 class="post-title">{{$article->title}}</h3>
            <a href="/berita/{{$article->id}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      @endforeach
      </div>

    </div>

  </section><!-- End Recent Blog Posts Section -->
</main><!-- End #main -->
@endsection
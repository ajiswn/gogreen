@extends('component.layout')

@section('title', 'Beranda - GoGreen')

@section('hero')
  <!-- ======= Hero Section ======= -->
  <section id="hero"
    class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Selamat datang di Go<span>Green</span></h1>
      <h2>🌿Lestari Alamku, Lestari Hidupku🌿</h2>
      <h3>Since 2012</h3>
      <a href="{{ url('/registration') }}" class="btn-get-started scrollto">Gabung Kami</a>
    </div>
  </section>
  <!-- End Hero -->
@endsection

@section('body')
  <!-- ======= What We Do Section ======= -->
  <section id="what-we-do" class="what-we-do">
    <div class="container">

      <div class="section-title">
        <h2>Aktivitas Kami GoGreen</h2>
        <p>Kami, UKM GoGreen, berkomitmen untuk melestarikan lingkungan melalui
          berbagai kegiatan dan program
          yang kami selenggarakan. Berikut adalah beberapa inisiatif utama kami:
        </p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="bx bxs-tree"></i></div>
            <h4>Aksi Seribu Pohon</h4>
            <p>Kami melakukan kegiatan tahunan yaitu "Aksi Seribu Pohon" merupakan
              kegiatan penghijauan di pelosok provinsi Jambi
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-desktop"></i></div>
            <h4>Webinar</h4>
            <p>Kami juga melakukan webinar melalui daring yang kerap dilakukan
              beberapa bulan sekali, salah satu pemateri yang pernah
              kami undang yaitu pendiri eco enzyme Jambi</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-bus"></i></div>
            <h4>Study Tour</h4>
            <p>Kami juga kerap melakukan acara "Study Tour with Gogreen" pada
              acara tersebut kami membawa rombongan anggota UKM GoGreen
              ke TPA Talang gulo untuk mengedukasi anggota GoGreen tentang
              mengolah dan memilah sampah untuk didaur ulang</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End What We Do Section -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row align-items-center">
        <div class="col-lg-6">
          <img src="{{ asset('assets/img/about_us.jpeg') }}"
            class="img-fluid rounded img-cropped" alt="">
        </div>
        <div
          class="col-lg-6 pt-4 pt-lg-0 d-flex flex-column justify-content-center text-center">
          <h3>Tentang Kami</h3>
          <p>
            UKM GO GREEN merupakan salah satu UKM yang baru, tepatnya pada tanggal
            4 April 2012. Yang ikut mendirikan UKM ini
            ialah Dr. Wawaha dari fakultas pendidikan ada juga dari Kehutanan
            langsung yaitu Ir. Hamzah. Pemimpin tertinggi dari
            UKM ini disebut Direktur yaitu Rono dan Sekjen dari UKM ini adalah
            Ridho Iskandar yang keduanya merupakan mahasiswa dari
            prodi pertanian.
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- Recent Posts Section -->
  <section id="recent-posts" class="recent-posts section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Artikel Terbaru</h2>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-5">

        @foreach ($artikel as $data)
          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up"
              data-aos-delay="100">

              <div class="post-img position-relative overflow-hidden">
                <img src="{{ asset('storage/' . $data->gambar) }}"
                  class="img-fluid" alt="">
                <span class="post-date">{{ $data->tanggal }}</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">{{ $data->judul }}</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span
                      class="ps-2">{{ $data->penulis }}</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span
                      class="ps-2">{{ $data->kategori }}</span>
                  </div>
                </div>

                <hr>

                <a href="{{ url('/detail_article/' . $data->id) }}"
                  class="readmore stretched-link"><span>Selengkapnya</span><i
                    class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post item -->
        @endforeach
      </div>

    </div>

  </section><!-- /Recent Posts Section -->


  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Kontak</h2>
        <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga</p>
      </div>

      <div class="row mt-5 justify-content-center">

        <div class="col-lg-10">

          <div class="info-wrap">
            <div class="row">
              <div class="col-lg-4 info">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jambi - Muara Bulian No.KM. 15 <br>
                  Mendalo Darat<br>
                  Kec. Jambi Luar Kota<br>
                  Kab. Muaro Jambi <br>
                  Jambi</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com<br>contact@example.com</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->
@endsection

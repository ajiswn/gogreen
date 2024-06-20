@extends('component.layout')

@section('title', 'Pendaftaran - GoGreen')

@section('body')
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Pendaftaran</h2>
        <ol>
          <li><a href="{{ url('/') }}">Beranda</a></li>
          <li>Pendaftaran</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <section class="inner-page">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
          <div class="card">
            <div class="card-body pt-4">
              <h2 class="card-title section-title">Open Recruitmen UKM Go<span>Green</span> UNJA 2024</h2>
              <p>
                Isi dengan legowo yaa gess🌿😄 Persyaratan:
              <ul>
                <li>Mengisi Formulir Pendaftaran</li>
                <li>Memposting twibbon di feed Instagram dan tag ig : <br>
                  <a href="https://www.instagram.com/gogreen.unja" target="_blank">@gogreen.unja</a><br>
                  <a href="https://www.instagram.com/oktaria6104" target="_blank">@oktaria6104</a><br>
                  <a href="https://www.instagram.com/julisabibi" target="_blank">@julisabibi</a><br>
                </li>
                <li>Membuat video reels ig dan tiktok singkat terkait isu lingkungan. Jangan lupa tag ig atau tiktok <a href="https://www.instagram.com/gogreen.unja" target="_blank">@gogreen.unja</a></li>
              </ul>
              </p>
              <p>
                Timeline <br>
                Pendaftaran + upload twibbon : 22 Agustus - 25 Agustus 2024 <br>
                Upload video reels : 26 Agustus - 27 Agustus 2024 <br>
                Pengumuman kelulusan : 29 Agustus 2024 <br> <br>
                Semangat mengisi g'form nyaaa gess🌿 <br> <br>
                *Lestari Alamku, Lestari Hidupku*
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="card">
            <div class="card-body">
              <!-- Formulir Pendaftaran -->
              <form class="row g-3" action="{{ route('daftar') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" id="nama">
                </div>
                <div class="col-12">
                  <label for="nim" class="form-label">NIM</label>
                  <input type="text" name="nim" class="form-control" id="nim">
                </div>
                <div class="col-12">
                  <label for="prodi" class="form-label">Program Studi</label>
                  <input type="text" name="prodi" class="form-control" id="prodi">
                </div>
                <div class="col-12">
                  <label for="fakultas" class="form-label">Fakultas</label>
                  <input type="text" name="fakultas" class="form-control" id="fakultas">
                </div>
                <div class="col-12">
                  <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                  <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir">
                </div>
                <div class="col-12">
                  <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                  <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir">
                </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card">
            <div class="card-body">
              <div class="col-12">
                <legend class="col-form-label col-sm-12 pt-0">Angkatan</legend>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="angkatan" id="gridRadios1" value="2021">
                  <label class="form-check-label" for="gridRadios1">2021</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="angkatan" id="gridRadios2" value="2022">
                  <label class="form-check-label" for="gridRadios2">2022
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="angkatan" id="gridRadios3" value="2023">
                  <label class="form-check-label" for="gridRadios3">2023</label>
                </div>
              </div>
              <div class="col-12 mt-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email">
              </div>
              <div class="col-12 mt-3">
                <label for="ktm" class="form-label">KTM</label>
                <input type="file" name="ktm" class="form-control" id="ktm">
              </div>
              <div class="col-12 mt-3">
                <label for="alasan" class="form-label">Alasan Ingin Gabung GoGreen</label>
                <textarea class="form-control" name="alasan" style="height: 100px"></textarea>
              </div>
              <div class="col-12 mt-3">
                <legend class="col-form-label col-sm-12 pt-0">Sudah Upload Twibbon?</legend>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="twibbon" id="gridRadios4" value="Sudah">
                  <label class="form-check-label" for="gridRadios4">Sudah</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="twibbon" id="gridRadios5" value="Belum">
                  <label class="form-check-label" for="gridRadios5">Belum</label>
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

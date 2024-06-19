@extends('component.admin_layout')

@section('title', 'Dasbor Admin - GoGreen')

@section('body')
    <div class="pagetitle">
        <h1>Dasbor</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Beranda</li>
                <li class="breadcrumb-item active">Dasbor</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row mb-xxl-5">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Artikel Card -->
                    <div class="col-xxl-12 col-md-12">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Artikel</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-file-earmark-text"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$artikel}}</h6>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Artikel Card -->

                    <!-- Pendaftar Card -->
                    <div class="col-xxl-6 col-md-12">
                        <div class="card info-card revenue-card">

                            <div class="card-body">
                                <h5 class="card-title">Pendaftar</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person-plus"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$pendaftar}}</h6>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Pendaftar Card -->

                    <!-- Anggota Card -->
                    <div class="col-xxl-6 col-xl-12">

                        <div class="card info-card customers-card">

                            <div class="card-body">
                                <h5 class="card-title">Anggota</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$anggota}}</h6>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Anggota Card -->

                </div>
            </div><!-- End Left side columns -->


        </div>
    </section>
@endsection

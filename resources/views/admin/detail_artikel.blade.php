@extends('component.layout')

@section('title',$artikel->judul.' - GoGreen')

@section('body')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
        <h2>Detail Artikel</h2>
        <ol>
            <li><a disabled href="{{ url('/') }}">Beranda</a></li>
            <li>Detail Artikel</li>
        </ol>
        </div>


    </div>
</section><!-- End Breadcrumbs -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 d-grid gap-2 mt-3">
            <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>

<section class="inner-page">
    <div class="container">
        <div class="row">

        <div class="col-lg-8">

            <!-- Blog Details Section -->
            <div id="blog-details" class="blog-details section">
            <div class="container">

                <article class="article">

                <div class="post-img">
                    <img src="{{ asset('storage/'. $artikel->gambar) }}" alt="" class="img-fluid">
                </div>

                <h2 class="title">{{ $artikel->judul }}</h2>

                <div class="meta-top">
                    <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i>{{ $artikel->penulis }}</li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="{{ $artikel->tanggal }}">{{ $artikel->tanggal }}</time></li>
                    </ul>
                </div><!-- End meta top -->

                <div class="content">
                    {!! nl2br(e($artikel->konten)) !!}
                </div><!-- End post content -->

                <div class="meta-bottom">
                    <i class="bi bi-folder"></i>
                    <ul class="cats">
                    <li><a href="#">{{ $artikel->kategori }}</a></li>
                    </ul>
                </div><!-- End meta bottom -->

                </article>

            </div>
            </div><!-- /Blog Details Section -->
        </div>

        <div class="col-lg-4 sidebar">

            <div class="widgets-container">

            <!-- Search Widget -->
            <div class="search-widget widget-item">

                <h3 class="widget-title">Search</h3>
                <form action="">
                <input type="text">
                <button type="submit"><i class="bi bi-search"></i></button>
                </form>

            </div><!--/Search Widget -->

            <!-- Categories Widget -->
            <div class="categories-widget widget-item">

                <h3 class="widget-title">Categories</h3>
                <ul class="mt-3">
                <li><a href="#">General <span>(25)</span></a></li>
                <li><a href="#">Lifestyle <span>(12)</span></a></li>
                <li><a href="#">Travel <span>(5)</span></a></li>
                <li><a href="#">Design <span>(22)</span></a></li>
                <li><a href="#">Creative <span>(8)</span></a></li>
                <li><a href="#">Educaion <span>(14)</span></a></li>
                </ul>

            </div><!--/Categories Widget -->

            <!-- Recent Posts Widget -->
            <div class="recent-posts-widget widget-item">

                <h3 class="widget-title">Recent Posts</h3>

                <div class="post-item">
                <img src="{{ asset('assets/img/blog/blog-recent-1.jpg') }}" alt="" class="flex-shrink-0">
                <div>
                    <h4><a href="detail_article.html">Nihil blanditiis at in nihil autem</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>
                </div><!-- End recent post item-->

                <div class="post-item">
                <img src="{{ asset('assets/img/blog/blog-recent-2.jpg') }}" alt="" class="flex-shrink-0">
                <div>
                    <h4><a href="detail_article.html">Quidem autem et impedit</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>
                </div><!-- End recent post item-->

                <div class="post-item">
                <img src="{{ asset('assets/img/blog/blog-recent-3.jpg') }}" alt="" class="flex-shrink-0">
                <div>
                    <h4><a href="detail_article.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>
                </div><!-- End recent post item-->

                <div class="post-item">
                <img src="{{ asset('assets/img/blog/blog-recent-4.jpg') }}" alt="" class="flex-shrink-0">
                <div>
                    <h4><a href="detail_article.html">Laborum corporis quo dara net para</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>
                </div><!-- End recent post item-->

                <div class="post-item">
                <img src="{{ asset('assets/img/blog/blog-recent-5.jpg') }}" alt="" class="flex-shrink-0">
                <div>
                    <h4><a href="detail_article.html">Et dolores corrupti quae illo quod dolor</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>
                </div><!-- End recent post item-->

            </div><!--/Recent Posts Widget -->

            <!-- Tags Widget -->
            <div class="tags-widget widget-item">

                <h3 class="widget-title">Tags</h3>
                <ul>
                <li><a href="#">App</a></li>
                <li><a href="#">IT</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Mac</a></li>
                <li><a href="#">Design</a></li>
                <li><a href="#">Office</a></li>
                <li><a href="#">Creative</a></li>
                <li><a href="#">Studio</a></li>
                <li><a href="#">Smart</a></li>
                <li><a href="#">Tips</a></li>
                <li><a href="#">Marketing</a></li>
                </ul>

            </div><!--/Tags Widget -->

            </div>

        </div>

        </div>
    </div>
</section>
@endsection
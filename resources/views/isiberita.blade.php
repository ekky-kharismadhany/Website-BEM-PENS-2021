@extends('layout.app')
@section('body')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">
        <ol>
            <li><a href="/">Beranda</a></li>
            <li><a href="/berita">Berita</a></li>
            <li>{{$articles->title}}</li>
        </ol>
    </div>
</section><!-- End Breadcrumbs -->
<!-- ======= Blog Single Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 entries">
                <article class="entry entry-single">
                    <div class="entry-img">
                        <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        <a href="blog-single.html">{{$articles->title}}</a>
                    </h2>
                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">{{$articles->author}}</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{$articles->created_at}}</time></a></li>
                        </ul>
                    </div>
                    <div class="entry-content">
                        {!! $articles->content !!}
                    </div>
                    <div class="entry-footer">
                    </div>
                </article>
                @endsection
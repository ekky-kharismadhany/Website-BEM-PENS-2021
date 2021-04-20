@extends('layout.app')
@section('body')
<!-- ======= Blog Section ======= -->
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="/">Beranda</a></li>
            <li>Berita</li>
        </ol>
        <h2>Berita</h2>

    </div>
</section><!-- End Breadcrumbs -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 entries">
            @foreach($articles as $article)
                <article class="entry">

                    <div class="entry-img">
                        <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        <a href="blog-single.html">{{$article->title}}</a>
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">{{$article->author}}</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{$article->created_at}}</time></a></li>
                        </ul>
                    </div>

                    <div class="entry-content">
                        <p>
                        {!! $article->content !!}
                        </p>
                        <div class="read-more">
                            <a href="/berita/{{$article->id}}">Read More</a>
                        </div>
                    </div>

                </article><!-- End blog entry -->
                <div class="blog-pagination">
                    <ul class="justify-content-center">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div>
            @endforeach
            </div><!-- End blog entries list -->
        </div>
    </div>
</section><!-- End Blog Section -->
@endsection
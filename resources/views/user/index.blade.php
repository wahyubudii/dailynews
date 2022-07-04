@extends('layout.user.master')
@section('title', 'Dashboard')
@section('content')
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="d-flex col-lg-12 col-sm-12 col-md-12">
                @foreach($news as $berita)
                <article class="col-lg-2 col-sm-2 col-md-2">
                    <a href="" target="_blank">
                        <img src="{{ $berita->image }}" alt="intro-img" class="rounded img-fluid">
                        <p class="pt-2 fs-1 text-truncate">{{ $berita->judul }}</p>
                    </a>
                </article>
                @endforeach
            </div>
        </div>
        <div class="row pt-2 pb-4 display-height">
            <div class="d-flex col-lg-12 col-sm-12 col-md-12">
                <article class="col-lg-10 col-sm-10 col-md-10">
                    <a href="" target="_blank">
                        <img src="https://akcdn.detik.net.id/community/media/visual/2018/07/17/a5b2d221-c953-49d3-8d17-6dea4b9cdb93_169.jpeg?w=700&q=90" alt="intro-img" class="rounded img-display">
                        <h4 class="py-2 fs-1 text-truncate">Minggu Legi 19 Juni 2022: Cerdik Pecahkan Masalah Pelik</h4>
                        <p>29 Menit lalu</p>
                    </a>
                </article>
                <div class="col-lg-2 col-sm-2 col-md-2">
                    <article>
                        <a href="" target="_blank">
                            <img src="https://akcdn.detik.net.id/community/media/visual/2018/07/17/a5b2d221-c953-49d3-8d17-6dea4b9cdb93_169.jpeg?w=700&q=90" alt="intro-img" class="rounded img-sidebar">
                            <p class="pt-2 fs-1 text-truncate">Minggu Legi 19 Juni 2022: Cerdik Pecahkan Masalah Pelik</p>
                        </a>
                    </article>
                    <article>
                        <a href="" target="_blank">
                            <img src="https://akcdn.detik.net.id/community/media/visual/2018/07/17/a5b2d221-c953-49d3-8d17-6dea4b9cdb93_169.jpeg?w=700&q=90" alt="intro-img" class="rounded img-sidebar">
                            <p class="pt-2 fs-1 text-truncate">Minggu Legi 19 Juni 2022: Cerdik Pecahkan Masalah Pelik</p>
                        </a>
                    </article>
                    <article>
                        <a href="" target="_blank">
                            <img src="https://akcdn.detik.net.id/community/media/visual/2018/07/17/a5b2d221-c953-49d3-8d17-6dea4b9cdb93_169.jpeg?w=700&q=90" alt="intro-img" class="rounded img-sidebar">
                            <p class="pt-2 fs-1 text-truncate">Minggu Legi 19 Juni 2022: Cerdik Pecahkan Masalah Pelik</p>
                        </a>
                    </article>
                    <article>
                        <a href="" target="_blank">
                            <img src="https://akcdn.detik.net.id/community/media/visual/2018/07/17/a5b2d221-c953-49d3-8d17-6dea4b9cdb93_169.jpeg?w=700&q=90" alt="intro-img" class="rounded img-sidebar">
                            <p class="pt-2 fs-1 text-truncate">Minggu Legi 19 Juni 2022: Cerdik Pecahkan Masalah Pelik</p>
                        </a>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  ABOUT AREA END  -->

<!--  NEWS FEED  -->
<section id="feed" class="section-padding pt-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-sm-9 col-md-9">
                <h5>News Feed</h5>
                @foreach($news as $berita)
                <article class="pt-3">
                    <a class="d-flex align-items-center" href="" target="_blank">
                        <img class="rounded img-feed" src="{{ $berita->image }}" alt="">
                        <div class="px-3">
                            <h5 class="pb-0">{{ $berita->judul }}</h5>
                            <span class="feed-category">{{ $berita->category->name }}</span>
                            <p class="feed-time">29 Menit lalu</p>
                        </div>
                    </a>
                </article>
                @endforeach
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">
                <div class="pb-5">
                    <h5 class="tag-title">Tag Terpopuler</h5>
                    <ul class="pt-3">
                        <a class="pb-1 d-block" href="" target="_blank"><span class="tag"># </span>AHAHAAH</a>
                        <a class="pb-1 d-block" href="" target="_blank"><span class="tag"># </span>AHAHAAH</a>
                        <a class="pb-1 d-block" href="" target="_blank"><span class="tag"># </span>AHAHAAH</a>
                        <a class="pb-1 d-block" href="" target="_blank"><span class="tag"># </span>AHAHAAH</a>
                        <a class="pb-1 d-block" href="" target="_blank"><span class="tag"># </span>AHAHAAH</a>
                    </ul>
                </div>

                <div class="pb-5">
                    <h5 class="tag-title">Loker Terbaru</h5>
                    <ul class="pt-3">
                        <a class="d-flex pb-2" href="" target="_blank">
                            <img src="https://akcdn.detik.net.id/community/media/visual/2018/07/17/a5b2d221-c953-49d3-8d17-6dea4b9cdb93_169.jpeg?w=700&q=90" class="rounded job-news" alt="">
                            <div class="ml-2">
                                <p class="job-news-title" style="line-height: 1.7;">Lowongan Staf HRD RS Emanuel di Banjarnegara</p>
                                <p class="job-news-time text-truncate">Rabu, 08 Jun 2022 08:40 WIB</p>
                            </div>
                        </a>
                        <a class="d-flex pb-2" href="" target="_blank">
                            <img src="https://akcdn.detik.net.id/community/media/visual/2018/07/17/a5b2d221-c953-49d3-8d17-6dea4b9cdb93_169.jpeg?w=700&q=90" class="rounded job-news" alt="">
                            <div class="ml-2">
                                <p class="job-news-title" style="line-height: 1.7;">Lowongan Staf HRD RS Emanuel di Banjarnegara</p>
                                <p class="job-news-time text-truncate">Rabu, 08 Jun 2022 08:40 WIB</p>
                            </div>
                        </a>
                        <a class="d-flex pb-2" href="" target="_blank">
                            <img src="https://akcdn.detik.net.id/community/media/visual/2018/07/17/a5b2d221-c953-49d3-8d17-6dea4b9cdb93_169.jpeg?w=700&q=90" class="rounded job-news" alt="">
                            <div class="ml-2">
                                <p class="job-news-title" style="line-height: 1.7;">Lowongan Staf HRD RS Emanuel di Banjarnegara</p>
                                <p class="job-news-time text-truncate">Rabu, 08 Jun 2022 08:40 WIB</p>
                            </div>
                        </a>
                        <button type="button" class="my-3 py-2 rounded btn btn-custom">Lihat Selengkapnya &rarr;</button>
                    </ul>
                </div>

                <div class="pb-5">
                    <h5 class="tag-title">Berita Populer</h5>
                    <ul class="pt-3">
                        <a class="d-flex pb-2" href="" target="_blank">
                            <span>#</span>
                            <h6 class="pl-1">1</h6>
                            <div class="ml-2">
                                <p class="popular-news-title" style="line-height: 1.5;">Lowongan Staf HRD RS Emanuel di Banjarnegara</p>
                                <p class="popular-news-time text-truncate">Rabu, 08 Jun 2022 08:40 WIB</p>
                            </div>
                        </a>
                        <a class="d-flex pb-2" href="" target="_blank">
                            <span>#</span>
                            <h6 class="pl-1">2</h6>
                            <div class="ml-2">
                                <p class="popular-news-title" style="line-height: 1.5;">Lowongan Staf HRD RS Emanuel di Banjarnegara</p>
                                <p class="popular-news-time text-truncate">Rabu, 08 Jun 2022 08:40 WIB</p>
                            </div>
                        </a>
                        <a class="d-flex pb-2" href="" target="_blank">
                            <span>#</span>
                            <h6 class="pl-1">3</h6>
                            <div class="ml-2">
                                <p class="popular-news-title" style="line-height: 1.5;">Lowongan Staf HRD RS Emanuel di Banjarnegara</p>
                                <p class="popular-news-time text-truncate">Rabu, 08 Jun 2022 08:40 WIB</p>
                            </div>
                        </a>
                        <button type="button" class="my-3 py-2 rounded btn btn-custom">Lihat Selengkapnya &rarr;</button>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  NEWS FEED END  -->
@endsection
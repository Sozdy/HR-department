@extends('layouts.no_navbar')

@section('title-block')Кадровый портал Амурского областного суда@endsection

@section("content")

    @include('inc.navbar_new')

    <div class="banner-container">
        <img src="/img/banner.jpg?v=2" alt="" class="banner">
        <div class="overlay"></div>
    </div>

    <div class="background">
        <div class="container">
            <div class="row justify-content-start">

                @include("inc/links", ["class" => "link", "container" => "col-12 col-sm-6 col-md-4 block"])

                <div class="col-12 col-sm-6 col-md-4 block">
                    <a href="/news" class="link">
                        Новости
                    </a>
                </div>

            </div>

            <div class="row">
                <div class="col-12 mt-3">
                    <a href="https://docs.google.com/spreadsheets/d/1X5kpRJ8nxrri719SgPf6JrG6o23k5BEYf3nme29Mr04/htmlview" target="_blank">
                        <img src="/img/reserve_banner.jpg" class="w-100" style="min-height: 100px;object-fit: cover;">
                    </a>
                </div>
            </div>

        </div>
    </div>
    <div class="news-container">
        <div class="container">
            <h2 class="d-block d-lg-none" style="padding: 15px">Новости</h2>

            <div class="row">

                @foreach($last_news as $news_item)
                    <div class="col-lg-3 news_item_block">
                        <a href="/news/{{ $news_item->id }}">
                            <div class="news_item">
                                <div class="bg_img" style="background-image: url({{ Voyager::image( $news_item->main_img ) }})"></div>
                                <div class="content">
                                    <div class="description">
                                        <p>{{ $news_item->annotation }}</p>
                                    </div>
                                    <div class="data_block">
                                        <p class="date">{{ $news_item->created_at }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

    {{--            <a class="col-lg-3 white" href="/news">--}}
    {{--                <div class="all_news_btn">--}}
    {{--                    <p class="btn_text">Все новости</p>--}}
    {{--                    <i class="fa fa-arrow-right"></i>--}}
    {{--                </div>--}}
    {{--            </a>--}}
            </div>
        </div>
    </div>

@endsection

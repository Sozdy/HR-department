@extends('layouts.main')

@section('title-block')Новости@endsection

@section('content')
    @include('inc.title', ["title" => $news_item->annotation ])

    <div class="container">
        <div class="row page_link">
            <div class="col-12">
                <a class="active_link" href="/news"><u>Ко всем новостям</u></a>
            </div>
        </div>
        <div class="row">
            <div class="text-block col-12">
                <div class="news_photo" style="background-image: url('{{ Voyager::image( $news_item->main_img ) }}')"></div>
                <div class="description">
                    <h5 class="news_title">{{ $news_item->title }}</h5>
                    <p>{!! $news_item->description !!}</p>
                    <p class="date">{{ $news_item->created_at }}</p>
                </div>
            </div>
        </div>
        <div class="row page_link">
            <div class="col-12">
                <a class="active_link" href="/news"><u>Ко всем новостям</u></a>
            </div>
        </div>
    </div>


@endsection

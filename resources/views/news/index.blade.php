@extends('layouts.main')

@section('title-block')Новости@endsection

@section('content')
    @include('inc.title', ["title" => "Новости"])

    <div class="container">
        <div class="row page_link">
            <div class="col-12">
                <a class="active_link" href="/"><u>Вернуться на главную</u></a>
            </div>
        </div>
            <div class="news_list">
                @foreach($news as $news_item)
                    <div class="news_item_block">
                    <a href="/news/{{ $news_item->id }}">
                        <div class="news_item">
                            <div class="bg_img" style="background-image: url('{{ Voyager::image( $news_item->main_img ) }}')"></div>
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
            </div>
        <div class="row">
            <div class="col-12 btn_block">
                <!-- <button class="btn gray">Показать ещё</button> -->
                <div style="padding-top: 40px;">
                    {{ $news->links() }}
                </div>
            </div>
        </div>
        <div class="row rise_up">
            <div class="col-12">
                <a class="rise_up_btn" href="#">Наверх</a>
            </div>
        </div>
    </div>

@endsection

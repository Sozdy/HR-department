@extends('layouts.main')

@section('title-block')Молодёжный кадровый резерв@endsection

@section('content')
    @include('inc.title', ["title" => "Молодежный кадровый резерв"])

    <div class="container">
        <div class="row page_link">
            <div class="col-12">
                <a class="active_link" href="/"><u>Вернуться на главную</u></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="text-block">
                    {!! $body !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 btn_block">
                <a class="btn green" href="/youth-personnel-reserve/profile-form">Заполнить анкету</a>
            </div>
        </div>
        <div class="row rise_up">
            <div class="col-12">
                <a class="rise_up_btn active_link" href="#"><u>Наверх</u></a>
            </div>
        </div>
    </div>
@endsection

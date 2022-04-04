<?php

$fields = json_decode(File::get(public_path('forms/vacancies-ask.json')));

?>

@extends('layouts.main')

@section('title-block')Вакансии@endsection

@section('content')
    @include('inc.title', ["title" => "Вакансии"])

    <div class="container">
        <div class="row page_link">
            <div class="col-12">
                <a class="active_link" href="#" onclick="history.back()"><u>Вернуться</u></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @include("inc.form", [
                "fields" => $fields,
                "title" => "Задать вопрос",
                "action" => "/questionary?vacancy_id=".app('request')->input('vacancy')
                ])
            </div>
        </div>
    </div>
@endsection

@push("scripts")
    <script>
        $(document).ready(() => {
            $.urlParam = function(name){
                var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
                if (results==null) {
                    return null;
                }
                return decodeURI(results[1]) || 0;
            };

            var vacancyLink = "<a href='hr.amuroblsud.ru/vacancies/" + $.urlParam("vacancy") + "'>Ссылка</a>";

            $('<input type="hidden" name="vacancy" value="'+vacancyLink+'" />')
                .appendTo("#site-form");
        });
    </script>
@endpush

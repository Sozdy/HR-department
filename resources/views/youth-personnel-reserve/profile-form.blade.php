<?php

$fields = json_decode(File::get(public_path('forms/youth-personal-reserve.json')));

?>

@extends('layouts.main')

@section('title-block')Молодёжный кадровый резерв@endsection

@section('content')
    @include('inc.title', ["title" => "Молодежный кадровый резерв"])

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
                    "title"  => "Анкета кандидата в молодежный кадровый резерв",
                    "action" => "/questionary"
                ])
            </div>
        </div>
    </div>
@endsection

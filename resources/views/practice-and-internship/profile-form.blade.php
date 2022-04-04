<?php

$fields = json_decode(File::get(public_path('forms/practice-and-internship.json')));

?>


@extends('layouts.main')

@section('title-block')Практика и стажировки@endsection

@section('content')
    @include('inc.title', ["title" => "Практика и стажировки"])

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
                "title" => "Анкета кандидата на прохождение практики (стажировки)",
                "action" => "/questionary"
                ])
            </div>
        </div>
    </div>
@endsection

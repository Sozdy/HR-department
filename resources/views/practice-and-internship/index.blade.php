@extends('layouts.main')
@section('title-block')Практика и стажировки@endsection

@section('content')
    @include('inc.title', ["title" => "Практика и стажировки"])

    <div class="container">
        <div class="row page_link">
            <div class="col-12">
                <a class="active_link" href="/"><u>Вернуться на главную</u></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="text-block">
                    <p>Амурский областной суд предлагает студентам юридических специальностей и гражданам с
                        высшим юридическим образованием, планирующим построить карьеру в судебной системе,
                        прохождение практики и стажировки в судах общей юрисдикции Амурской области.
                        <br>
                        <br>
                        <b>Примерный перечень задач на время прохождения практики:</b>
                        <br>
                        - ознакомление с нормативно-правовыми документами, регулирующими деятельность суда,
                        его структурных подразделений
                        <br>
                        - изучение структуры, полномочий, сферы деятельности суда
                        <br>
                        - изучение практических основ делопроизводства на государственной гражданской службе
                        <br>
                        - подготовка проектов документов в сфере полномочий суда
                        <br>
                        - участие в повседневной деятельности суда
                        <br>
                        - выполнение поручений руководителя практики от суда
                        <br>
                        <br>
                        Заявку (анкету) на прохождение практики и стажировки следует направить заблаговременно,
                        не позднее чем за один месяц до начала практики (стажировки).
                        <br>
                        <br>
                        К заявке следует приложить направление или договор от ВУЗа (если имеется).
                        <br>
                        <br>
                        Срок рассмотрения заявок – две недели. При наличии свободных рабочих мест Вы будете
                        приглашены для прохождения практики (стажировки).
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 btn_block">
                <a class="btn green" href="/practice-and-internship/profile-form">Заполнить анкету</a>
            </div>
        </div>
        <div class="row rise_up">
            <div class="col-12">
                <a class="rise_up_btn active_link" href="#"><u>Наверх</u></a>
            </div>
        </div>
    </div>
@endsection
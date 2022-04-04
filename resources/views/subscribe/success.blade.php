@extends('layouts.main')

@section('title-block')Подписаться на уведомления@endsection

@section('content')
    @include('inc.title', ["title" => "Подписаться на уведомления"])

    <div class="container">
        <div class="row page_link">
            <div class="col-12">
                <a class="active_link" href="/"><u>Вернуться на главную</u></a>
            </div>
        </div>

        <div class="text-block accordion_block d-none">
            <p style="margin-bottom: 0"><b>Кадровый портал Амурского областного суда</b> – объединенная открытая площадка для подбора кадров в аппарат судов общей юрисдикции Амурской области.</p>
            <p class="collapse" id="collapseExample">
                <br>
                В Амурской области действуют 22 районных (городских) суда и Амурский областной суд с
                компетенцией на весь регион.
                <br>
                <br>
                Мы предлагаем присоединиться к нашей профессиональной команде.
                <br>
                <br>
                <b>Работа в суде – это:</b>
                <br>
                - значимое дело на благо жителей области
                <br>
                - стабильность и социальные гарантии
                <br>
                - профессиональное развитие и обучение за счет работодателя
                <br>
                - своевременная оплата труда
                <br>
                <br>
                В данном разделе Вы найдете актуальные вакансии в судах Амурской области, сможете заполнить
                и отправить свое резюме.
            </p>
            <a class="active_link collapsed" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <u class="show">Развернуть</u>
                <u class="hide">Свернуть</u>
            </a>
        </div>

        <div class="row my-5">
            <div class="col-12 font-weight-bold my-5">
                <div class="white-bg p-5 text-center my-5">
                    <h5><b>Вы успешно подписались на рассылку</b></h5>
                    <a href="/" class="btn btn-success">Вернуться на главную страницу</a>
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

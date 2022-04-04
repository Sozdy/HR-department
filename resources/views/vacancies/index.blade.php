@extends('layouts.main')

@section('title-block')Вакансии@endsection

@section('content')
    @include('inc.title', ["title" => "Вакансии"])

    <div class="container">
        <div class="row page_link">
            <div class="col-12">
                <a class="active_link" href="/"><u>Вернуться на главную</u></a>
            </div>
        </div>

        <div class="text-block accordion_block">
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

        <form action="/vacancies/search" method="POST" role="search">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-12">
                    <div class="search">
                        <input type="text" class="search_box" name="query_string" placeholder="Поиск по вакансиям" value="@if (isset($query)) {{ $query }}@endif">
                        <button type="submit" class="search_btn">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>

        <a class="subscribe-link-block mt-3" href="/subscribe">
            <i class="fa fa-envelope-o mr-3"></i>
            Подписаться на уведомления о новых вакансиях
        </a>

        <div class="vacancies_list row">
            @foreach($vacancies as $vacancy)
                <a href="/vacancies/{{ $vacancy->id }}" style="width: 100%;">
                    <div class="vacancies_item">
                        <div class="vacancies_title_block">{{ $vacancy->position }}</div>
                        <div class="vacancies_description_block">
                            <p>Отрасль: {{ $vacancy->industry }}</p>
                            <p>Должностной оклад: {{ $vacancy->salary }}</p>
                            <div style="display: flex; justify-content: space-between">
                                <p>Организация: {{ $vacancy->organization }}</p>
                                <p>Дата публикации {{ $vacancy->created_at }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach

            @if (method_exists($vacancies, 'links'))
                <div>{{ $vacancies->links() }}</div>
            @endif

        </div>
        <div class="row rise_up">
            <div class="col-12">
                <a class="rise_up_btn" href="#">Наверх</a>
            </div>
        </div>
    </div>
@endsection

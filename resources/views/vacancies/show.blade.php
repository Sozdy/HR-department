@extends('layouts.main')

@section('title-block')Вакансия на должность {{$vacancy->position}}@endsection

@section('content')
    @include('inc.title', ["title" => "Вакансии"])

<div class="container">
    <div class="row page_link">
        <div class="col-12">
            <a class="active_link" href="/vacancies"><u>К списку вакансий</u></a>
        </div>
    </div>

    <div class="row">
        <div class="col-12 vacancy_block" id="vacancy_block">
            <div class="vacancies_title">Должность: {{ $vacancy->position }}</div>
            <div class="paragraph">
                <p class="title">
                    <b>Организация:</b>
                    <br />
                    {{ $vacancy->organization }}
                </p>
            </div>
            <div class="paragraph green">
                <p class="title">
                    <b>Квалификационные требования:</b>
                    <br />
                    {{ $vacancy->requirements }}
                </p>
            </div>
            <div class="paragraph">
                <p class="title">
                    <b>Образование:</b>
                    <br />
                    {{ $vacancy->education }}
                </p>
            </div>
            <div class="paragraph">
                <p class="title">
                    <b>Стаж работы:</b>
                    <br />
                    {{ $vacancy->experience }}
                </p>
            </div>
            <div class="paragraph">
                <p class="title">
                    <b>Должностные обязанности:</b>
                    <br />
                    {{ $vacancy->responsibilities }}
                </p>
            </div>
            <div class="paragraph">
                <p class="title">
                    <b>Навыки и умения:</b>
                    <br />
                    {{ $vacancy->skills }}
                </p>
            </div>
            <div class="paragraph">
                <p class="title">
                    <b>Должностной оклад:</b>
                    <br />
                    {{ $vacancy->salary }}
                </p>
            </div>
            <div class="paragraph">
                <p class="title">
                    <b>Дополнительно:</b>
                    <br />
                    {{ $vacancy->additional_info }}
                </p>
            </div>
            <div class="paragraph green">
                <p class="title">Информация о контактном лице:</p>
                <p>ФИО: {{ $vacancy->contacts_full_name }}</p>
                <p>Адрес электронной почты: {{ $vacancy->contacts_email }}</p>
                <p>Телефон: {{ $vacancy->contacts_phone }}</p>
            </div>
            <div class="paragraph">
                <p class="date">Дата публикации вакансии: {{ $vacancy->created_at }}</p>
            </div>
        </div>
    </div>

    <div class="row no-padding">
        <div class="col-12 col-md-5 text-center text-md-left">
            <a class="btn green" href="/vacancies/profile-form?vacancy={{ $vacancy->id }}">Подать резюме</a>
            <a class="btn gray" href="/vacancies/ask-form?vacancy={{ $vacancy->id }}">Задать вопрос</a>
            <br/>
            <br/>
        </div>
        <div class="col-12 col-md-7 text-center text-md-right">
            <a class="btn gray" onclick="printDiv('vacancy_block')">Распечатать</a>
            <a class="btn gray" onclick="savePDF()" style="margin-right: 0">Сохранить</a>
        </div>
    </div>
</div>

@endsection

@push("scripts")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://github.com/niklasvh/html2canvas/releases/download/v1.0.0-alpha.12/html2canvas.js"></script>
    <script>
        function printDiv(divName) {
            var originalContents = $("body").html();

            $("#vacancy_block").find("iframe").hide();

            html2canvas(document.querySelector("#vacancy_block"), { scale: 2 }).then(canvas => {
                $("body").html('<img id="pic" style="width: 100%" src="' + canvas.toDataURL() + '">');

                $("#pic").on('load', () => {
                    window.onafterprint = () => { $("body").html($(originalContents).html()); };
                    window.print();
                });
            });
        }


        function savePDF() {
            doCanvas();
        }

        function doCanvas() {
            html2canvas(document.querySelector("#vacancy_block"), { scale: 2 }).then(canvas => {
                doPDF(canvas);
            });

        }

        function doPDF(canvas) {
            var doc = new jsPDF("p", "pt", [canvas.width, canvas.height]);

            doc.addImage(canvas.toDataURL(), 'PNG', 0, 0, canvas.width, canvas.height);

            doc.save('Кадровый отдел Амурского областного суда.pdf');
        }
    </script>
@endpush

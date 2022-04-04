@extends('layouts.main')

@section('title-block')Конкурс на должность {{$competition->position}} @endsection

@section('content')
    @include('inc.title', ["title" => "Конкурс"])

    <div class="container">
        <div class="row page_link">
            <div class="col-12">
                <a class="active_link" href="/competition"><u>К списку конкурсов</u></a>
            </div>
        </div>
        <div class="row">
            <div id="vacancy_block" class="col-12 vacancy_block">
                <div class="white-bg">
                    <div class="paragraph vacancies_title">
                        <b>Должность:</b> {{ $competition->position }}
                    </div>
                    <div class="paragraph">
                        <b>Организация:</b>
                        <br />
                        {{ $competition->organization }}
                    </div>
                    <div class="paragraph">
                        <b>Группа и категория должности:</b>
                        <br />
                        {{ $competition->group }}
                    </div>
                    <div class="paragraph green">
                        <b>Квалификационные требования:</b>
                        <br />
                        {{ $competition->requirements }}
                    </div>
                    <div class="paragraph">
                        <b>Образование:</b>
                        <br />
                        {{ $competition->education }}
                    </div>
                    <div class="paragraph">
                        <b>Стаж работы:</b>
                        <br />
                        {{ $competition->experience }}
                    </div>
                    <div class="paragraph">
                        <b>Должностные обязанности:</b>
                        <br />
                        {{ $competition->responsibilities }}
                    </div>
                    <div class="paragraph">
                        <b>Навыки и умения:</b>
                        <br />
                        {{ $competition->skills }}
                    </div>
                    <div class="paragraph">
                        <b>Методы оценки:</b>
                        <br />
                        {{ $competition->methods }}
                    </div>
                    <div class="paragraph">
                        <b>Дополнительно:</b>
                        <br />
                        {{ $competition->additional_info }}
                    </div>
                    <div class="paragraph gray">
                        <p><b>Место и время приёма документов</b></p>
                        <div class="container-fluid" style="padding: 0">
                            <div class="row">
                                @if(isset($competition->courthouse))
                                <div class="col-12 col-md-6">
                                    <div class="map">
                                        <iframe src="{{ $competition->courthouse->map_link  }}"></iframe>
                                    </div>
                                    <div>
                                        <b>Адрес приёма документов:</b>
                                        {{ $competition->courthouse->name }}
                                    </div>
                                </div>
                                @endif
                                <div class="col-12 col-md-6">
                                    <div>
                                        <b>Время приёма документов:</b>
                                        <br />
                                        {{ $competition->reception_time }}
                                    </div>
                                    <div>
                                        <b>Срок приёма документов:</b>
                                        <br />
                                        {{ $competition->documents_deadline }}
                                    </div>
                                    <div>
                                        <b>Предполагаемая дата проведения конкурса:</b>
                                        <br />
                                        {{ $competition->competition_date }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="paragraph green">
                        <div class="paragraph" style="padding-left: 0"><b>Информация о контактном лице:</b></div>
                        <div class="paragraph" style="padding-left: 0"><b>ФИО:</b> {{ $competition->contacts_full_name }}</div>
                        <div class="paragraph" style="padding-left: 0"><b>Адрес электронной почты:</b> {{ $competition->contacts_email }}</div>
                        <div class="paragraph" style="padding-left: 0"><b>Телефон:</b> {{ $competition->contacts_phone }}</div>
                    </div>
                    <div class="paragraph" style="display: flex; justify-content: space-between">
                        <p>
                            <b>Статус конкурса:</b> {{ $competition->status ? "открыт" : "закрыт" }}
                        </p>
                        <p class="date"><b>Дата публикации конкурса:</b> {{ $competition->created_at }}</p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end w-100 save-print">
                <a class="btn gray" onclick="printDiv('vacancy_block')">Распечатать</a>
                <a class="btn green" onclick="savePDF()">Сохранить</a>
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

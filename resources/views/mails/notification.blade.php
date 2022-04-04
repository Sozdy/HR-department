<html>
<head>
    <title>
        Уведомление от кадрового портала Амурского областного суда
    </title>
</head>
<body>
@if($data["type"] == "vacancy")
    <H1>Кадровый портал Амурского областного суда</H1>
    <br />
    Здравствуйте!
    <br />
    <br />
    На кадровом портале Амурского областного суда опубликована новая вакансия <b>«{{ $data["data"]["position"] }}»</b> в <b>{{ $data["data"]["organization"] }}</b>.
    <br />
    <br />
    <a href="https://hr.amuroblsud.ru/vacancies/{{ $data["data"]["id"] }}" target="_blank">Чтобы ознакомиться с ней, нажмите на эту ссылку</a>
    <br />
    <br />
    <small>
        <b></b>
        <br />
    </small>
@endif
@if($data["type"] == "competition")
    <H1>Кадровый портал Амурского областного суда</H1>
    <br />
    Здравствуйте!
    <br />
    На кадровом портале Амурского областного суда появился новый конкурс.
    <br />
    <br />
    <a href="https://hr.amuroblsud.ru/competition/{{ $data["data"]["id"] }}" target="_blank">Чтобы ознакомиться с ним, нажмите на эту ссылку</a>
@endif
</body>
</html>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="og:title" content="Кадровый портал Амурского областного суда">
    <meta name="og:description" content="Единая площадка для подбора кадров в аппарат судов общей юрисдикции Амурской области">
    <meta name="og:url" content="http://hr.amuroblsud.ru/">
    <meta name="og:site_name" content="Отдел кадров Амурского областного суда">
    <meta name="og:locale" content="ru_RU">
    <meta name="og:type" content="website">
    <meta name="og:image" content="http://hr.amuroblsud.ru/apple-touch-icon.png">

    <meta name="description" content="Единая площадка для подбора кадров в аппарат судов общей юрисдикции Амурской области">
    <meta name="keywords" content="работа в суде, работа амурский областной суд, кадровый портал суда, кадровый отдел амурского областного суда, работа в органах исполнительной власти">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=A0m4j3RMwd">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=A0m4j3RMwd">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=A0m4j3RMwd">
    <link rel="manifest" href="/site.webmanifest?v=A0m4j3RMwd">
    <link rel="mask-icon" href="/safari-pinned-tab.svg?v=A0m4j3RMwd" color="#5bbad5">
    <link rel="shortcut icon" href="/favicon.ico?v=A0m4j3RMwd">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title>@yield('title-block')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="/js/flatpickr.js"></script>

    <link href="{{ url('/css/app.css') }}?v=3" rel="stylesheet">
</head>

<body>

    <div id="app">
        @yield("layout")
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    @stack("scripts")

    <script>
        $(function() {
            $('.rise_up_btn').click(function() {
                $("html, body").animate({
                    scrollTop:0
                },10000);
            })
        });
    </script>
</body>

</html>

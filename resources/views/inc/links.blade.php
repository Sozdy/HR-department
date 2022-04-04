<?php
$links = [
    ["text" => "Вакансии",                   "url" => "/vacancies"],
    ["text" => "Конкурсы",                   "url" => "/competition"],
    ["text" => "Практика и стажировки",      "url" => "/practice-and-internship"],
    ["text" => "Обучение",                   "url" => "/education"],
    ["text" => "Молодежный кадровый резерв", "url" => "/youth-personnel-reserve"],
];
?>

@foreach ($links as $link)
    @if (isset($container))
        <div class="{{ $container }}">
    @endif

        <a href="{{ $link["url"] }}" class="{{ $class }}">
            {{ $link["text"] }}
        </a>

    @if (isset($container))
        </div>
    @endif
@endforeach

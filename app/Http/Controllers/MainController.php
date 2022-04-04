<?php

namespace App\Http\Controllers;

use App\AnotherClasses\MailUtils;
use App\News;
use App\Page;
use App\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MainController extends Controller
{
    public function index() {

        $last_news = News::orderBy('created_at', 'desc')
            ->take(4)
            ->get();

//        $last_news = [];

        return view('index', ['last_news' => $last_news]);
    }

    public function sendQuestionary (Request $request) {

        $hidden_fields = [
            '_token',
            'userfile',
            'send',
            'json_name',
            'vacancy_id',
        ];

        $fields = json_decode(File::get(public_path('forms/'.$request->json_name)), true);
        $summary = "";
        $images_links = [];

        if ($request->hasFile('userfile')) {
            foreach ($request->userfile as $image) {
                $filename = $image->getClientOriginalName().rand(1, 1000).time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('users_images'), $filename);
                array_push($images_links, $filename);
            }
        }

        foreach($request->all() as $key => $value) {
            if (in_array($key, $hidden_fields))
                continue;

            if ($key == "courthouse") {
                $summary .= "Здание суда: " . "$value" . "<br>";
                continue;
            }

            //array_column($fields, 'label', 'name')[explode("|", $key)[0]]
            //array_search(explode("|", $key)[0], array_column($fields, 'name', 'label'))

            $ru_field = array_column($fields, 'label', 'name')[explode("|", $key)[0]];

            $additional_info = '';
            if (isset(explode("|", $key)[1]))
                $additional_info .= '(дополнительно)';

            if (!empty($value))
                $summary .= "$ru_field". ($additional_info == '' ? '' : " " . $additional_info) .": $value <br>";
        }

        $vacancy_id = app('request')->input('vacancy_id');
        $email = null;

        if ($vacancy_id > 0) {
            $vacancy = Vacancy::whereId($vacancy_id)->first();

            if ($vacancy)
                $email = $vacancy->contacts_email;
        }

        MailUtils::sendMail('Новая анкета', 'mails.questionary', $email ?? MailUtils::TO_SELF, $summary, $images_links);

        return response('Анкета отправлена. Сейчас вы будете перенаправлены обратно.')
            ->header("Refresh", "2; url=".url()->previous());
    }
}

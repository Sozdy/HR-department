<?php

namespace App\Http\Controllers;

use App\AnotherClasses\MailUtils;
use App\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class VacancyController extends Controller
{
    public function index() {
        $vacancies = Vacancy::where("status", "PUBLISHED")
            ->orderBy('created_at', 'desc')
            ->select('id', 'position', 'industry', 'organization', 'created_at', 'salary')
            ->paginate(Vacancy::VACANCIES_PER_PAGE);

        return view('vacancies.index', ['vacancies' => $vacancies]);
    }

    public function show($id) {
        $vacancy = Vacancy::find($id);

        return view('vacancies.show', ['vacancy' => $vacancy]);
    }

    public function search(Request $request) {
        $user_query = $request->query_string;

        $fields =
            [
                'position',
                'industry',
                'organization',
                'requirements',
                'education',
                'experience',
                'responsibilities',
                'skills',
                'salary',
                'additional_info',
                'contacts_full_name',
                'contacts_email',
                'contacts_phone',
            ];

        $vacancies = Vacancy::where("status", "PUBLISHED")->where(function ($q) use($user_query, $fields) {
            foreach ($fields as $field) {
                $q->orwhere($field, 'like',  '%' . $user_query .'%');
            }
        })->get();

        if ($user_query == "")
            return $this->index();

        if (count($vacancies) > 0)
            return view('vacancies.index')->with(['vacancies' => $vacancies, 'query' => $user_query]);

        return view('vacancies.index')->with(['vacancies' => $vacancies, 'query' => $user_query]);
    }

    public function archive() {
        $vacancy = Vacancy::where('id', \request("id"))->first();
        $vacancy->status = $vacancy->status == "ARCHIVED" ? "PUBLISHED" : "ARCHIVED";
        $vacancy->save();

        return redirect(route('voyager.vacancies.index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Competition;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    public function index() {
        $competitions = Competition::orderBy('created_at', 'desc')
            ->select('id', 'position', 'industry', 'organization', 'status','created_at')
            ->paginate(Competition::COMPETITION_PER_PAGE);

        return view('competition.index', ['competitions' => $competitions]);
    }


    public function show($id) {

        $competition = Competition::find($id);

        if (!empty($competition))
            $competition = $competition->load('courthouse');
        else
            abort(404);

        return view('competition.show', ['competition' => $competition]);
    }

    public function search(Request $request) {
        $user_query = $request->query_string;

        $fields =
            [
                'position',
                'industry',
                'status',
                'organization',
                'group',
                'requirements',
                'education',
                'experience',
                'responsibilities',
                'skills',
                'methods',
                'additional_info',
                'reception_time',
                'documents_deadline',
                'competition_date',
                'contacts_full_name',
                'contacts_email',
                'contacts_phone'
            ];

        $competitions = Competition::where(function ($q) use($user_query, $fields) {
            foreach ($fields as $field) {
                $q->orwhere($field, 'like',  '%' . $user_query .'%');
            }
        })->get();

        if ($user_query == "")
            return $this->index();

        if (count($competitions) > 0)
            return view('competition.index')->with(['competitions' => $competitions, 'query' => $user_query]);

        return view('competition.index')->with(['competitions' => $competitions, 'query' => $user_query]);
    }

}

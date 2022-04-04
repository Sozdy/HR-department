<?php

namespace App\Http\Controllers;

use App\Courthouse;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function index() {
        return view('practice-and-internship.index');
    }

    public function form() {
        $courthouses = Courthouse::orderBy('name', 'asc')
            ->select('name')
            ->get();

        return view('practice-and-internship.profile-form', ['courthouses' => $courthouses]);
    }
}

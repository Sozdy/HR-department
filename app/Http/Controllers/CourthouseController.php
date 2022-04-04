<?php

namespace App\Http\Controllers;

use App\Courthouse;
use Illuminate\Http\Request;

class CourthouseController extends Controller
{
    public function index() {
        $courthouses = Courthouse::orderBy('created_at', 'desc')
            ->select('name')
            ->get();

        return $courthouses;
    }
}

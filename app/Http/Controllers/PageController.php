<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request) {
        $slug = $request->path();
        $page =  Page::where('slug', '=', $slug)->firstOrFail();

        return view($slug.'.index', ['body' => $page->body]);
    }
}

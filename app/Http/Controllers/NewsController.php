<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        $news = News::orderBy('created_at', 'desc')
            ->paginate(News::NEWS_PER_PAGE);

        return view('news.index', ['news' => $news]);
    }

    public function show($id) {
        $news_item = News::find($id);

        return view('news.show', ['news_item' => $news_item]);
    }
}

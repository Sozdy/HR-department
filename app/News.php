<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    const NEWS_PER_PAGE = 12;

    protected $fillable =
        [
            'title',
            'annotation',
            'description',
            'main_img',
        ];

    public function getCreatedAtAttribute($date)
    {
        return Carbon::parse($date)->format('d.m.Y');
    }
}

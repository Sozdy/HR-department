<?php

namespace App;

use App\Events\NotifySubscribersVacancy;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    const VACANCIES_PER_PAGE = 10;

    protected $fillable =
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

    protected $dispatchesEvents = [
        'created' => NotifySubscribersVacancy::class
    ];

    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d.m.Y');
    }
}

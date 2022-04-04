<?php

namespace App;

use App\Events\NotifySubscribersCompetition;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    public const COMPETITION_PER_PAGE = 10;

    protected $fillable =
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
            'contacts_phone',
            'courthouse_id'
        ];

    protected $dispatchesEvents = [
        'created' => NotifySubscribersCompetition::class
    ];

    public function courthouse() {
        return $this->belongsTo('App\Courthouse');
    }

    public function getCreatedAtAttribute($date)
    {
        return $date;
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d.m.Y');
    }
}

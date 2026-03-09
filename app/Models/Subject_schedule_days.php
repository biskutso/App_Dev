<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject_schedule_days extends Model
{
    protected $table = 'schedule_days';

    protected $fillable = [
        'subject_schedule_id',
        'day',
    ];

    public function subjectSchedule()
    {
        return $this->belongsTo(Subject_schedule::class, 'subject_schedule_id');
    }
}

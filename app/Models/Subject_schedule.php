<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject_schedule extends Model
{
    protected $table = 'subject_schedule';

    protected $fillable = [
        'subject_code',
        'section',
        'room_id',
        'term_id',
        'start_time',
        'end_time',
        'teacher_id',
    ];

    public function subject()
    {
        return $this->belongsTo(Subjects::class, 'subject_code', 'subject_code');
    }

    public function room()
    {
        return $this->belongsTo(Rooms::class, 'room_id');
    }

    public function term()
    {
        return $this->belongsTo(Terms::class, 'term_id');
    }

    public function teacher()
    {
        return $this->belongsTo(Teachers::class, 'teacher_id');
    }

    public function scheduleDays()
    {
        return $this->hasMany(Subject_schedule_days::class, 'subject_schedule_id');
    }

    public function subjectEnrolled()
    {
        return $this->hasMany(Subject_enrolled::class, 'subject_schedule_id');
    }
}

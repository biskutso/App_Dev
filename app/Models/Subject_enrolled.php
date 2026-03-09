<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject_enrolled extends Model
{
    protected $table = 'subject_enrolled';

    protected $fillable = [
        'enrollment_id',
        'subject_schedule_id',
        'status',
        'grade',
    ];

    public function enrollment()
    {
        return $this->belongsTo(Enrollments::class, 'enrollment_id');
    }

    public function subjectSchedule()
    {
        return $this->belongsTo(Subject_schedule::class, 'subject_schedule_id');
    }
}

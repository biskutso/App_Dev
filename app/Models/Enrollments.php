<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollments extends Model
{
    protected $table = 'enrollments';

    protected $fillable = [
        'student_id',
        'program_id',
        'term_id',
    ];

    public function student()
    {
        return $this->belongsTo(Students::class, 'student_id');
    }

    public function program()
    {
        return $this->belongsTo(Programs::class, 'program_id', 'code');
    }

    public function term()
    {
        return $this->belongsTo(Terms::class, 'term_id');
    }

    public function subjectEnrolled()
    {
        return $this->hasMany(Subject_enrolled::class, 'enrollment_id');
    }
}

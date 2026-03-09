<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Terms extends Model
{
    protected $table = 'terms';

    protected $fillable = [
        'schoolyear',
        'semester',
    ];

    public function enrollments()
    {
        return $this->hasMany(Enrollments::class, 'term_id');
    }

    public function subjectSchedules()
    {
        return $this->hasMany(Subject_schedule::class, 'term_id');
    }
}

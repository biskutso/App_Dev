<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    protected $table = 'teachers';

    protected $fillable = [
        'fname',
        'mname',
        'lname',
        'sname',
        'gender',
        'bdate',
        'email',
        'department_id',
    ];

    public function department()
    {
        return $this->belongsTo(Departments::class, 'department_id');
    }

    public function subjectSchedules()
    {
        return $this->hasMany(Subject_schedule::class, 'teacher_id');
    }
}

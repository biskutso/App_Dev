<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'fname',
        'mname',
        'lname',
        'sname',
        'gender',
        'bdate',
        'email',
    ];

    public function enrollments()
    {
        return $this->hasMany(Enrollments::class, 'student_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    protected $table = 'subjects';

    protected $primaryKey = 'subject_code';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'subject_code',
        'description',
        'units',
    ];

    public function subjectSchedules()
    {
        return $this->hasMany(Subject_schedule::class, 'subject_code', 'subject_code');
    }

    public function prerequisites()
    {
        return $this->hasMany(Prerequisites::class, 'subject_code', 'subject_code');
    }

    public function prerequisiteFor()
    {
        return $this->hasMany(Prerequisites::class, 'prerequisite_code', 'subject_code');
    }
}

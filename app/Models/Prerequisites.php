<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prerequisites extends Model
{
    protected $table = 'prerequisites';

    protected $fillable = [
        'subject_code',
        'prerequisite_code',
    ];

    public function subject()
    {
        return $this->belongsTo(Subjects::class, 'subject_code', 'subject_code');
    }

    public function prerequisite()
    {
        return $this->belongsTo(Subjects::class, 'prerequisite_code', 'subject_code');
    }
}

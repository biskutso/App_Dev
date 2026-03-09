<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $table = 'rooms';

    protected $fillable = [
        'room_name',
        'building',
    ];

    public function subjectSchedules()
    {
        return $this->hasMany(Subject_schedule::class, 'room_id');
    }
}

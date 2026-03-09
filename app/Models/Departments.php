<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    protected $table = 'departments';

    protected $fillable = [
        'name',
    ];

    public function teachers()
    {
        return $this->hasMany(Teachers::class, 'department_id');
    }
}

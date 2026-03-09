<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
    protected $table = 'programs';

    protected $primaryKey = 'code';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'code',
        'name',
    ];

    public function enrollments()
    {
        return $this->hasMany(Enrollments::class, 'program_id', 'code');
    }
}

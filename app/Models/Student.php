<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $table = 'm_student';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'nim',
        'birthday',
        'created_at',
        'updated_at'
    ];
}

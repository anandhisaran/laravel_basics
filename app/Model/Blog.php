<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'student';

    protected $fillable = ['name', 'user', 'password', 'gender', 'vehicle', 
    'bike-company', 'resume'];
}

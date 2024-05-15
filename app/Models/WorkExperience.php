<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $table = 'work_experiences';

    protected $fillable = ['title', 'location', 'date', 'description', 'responsibilities'];

    protected $casts = ['responsibilities' => 'array'];

    public $timestamps = false;
}

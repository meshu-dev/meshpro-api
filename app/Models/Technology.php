<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    protected $table = 'technologies';

    protected $fillable = ['name'];

    public $timestamps = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileLink extends Model
{
    protected $table = 'profile_links';

    protected $fillable = ['name', 'url'];

    public $timestamps = false;
}

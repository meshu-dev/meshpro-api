<?php

namespace App\Repositories;

use App\Models\ProfileLink;

class ProfileLinkRepository
{
    public function getAll()
    {
        return ProfileLink::get();
    }
}
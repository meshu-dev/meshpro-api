<?php

namespace App\Repositories;

use App\Models\WorkExperience;

class WorkExperienceRepository
{
    public function getAll()
    {
        return WorkExperience::where('active', true)->get();
    }
}

<?php

namespace App\Repositories;

use App\Models\Skill;

class SkillRepository extends CrudRepository
{

    public function model()
    {
        return Skill::class;
    }
}

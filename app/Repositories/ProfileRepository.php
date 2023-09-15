<?php

namespace App\Repositories;

use App\Models\User;

class ProfileRepository extends CrudRepository
{

    public function model()
    {
        return User::class;
    }
}

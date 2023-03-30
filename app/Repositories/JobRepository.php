<?php

namespace App\Repositories;

use App\Models\Job;

class JobRepository extends CrudRepository
{

    public function model()
    {
        return Job::class;
    }
}

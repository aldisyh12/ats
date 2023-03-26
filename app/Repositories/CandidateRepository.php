<?php

namespace App\Repositories;

use App\Models\Candidate;

class CandidateRepository extends CrudRepository
{
    public function model()
    {
        return Candidate::class;
    }
}

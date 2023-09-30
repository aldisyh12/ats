<?php

namespace App\Repositories;

use App\Models\Cabang;

class CabangRepository extends CrudRepository
{

    public function model()
    {
        return Cabang::class;
    }
}

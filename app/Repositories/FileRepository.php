<?php

namespace App\Repositories;

use App\Models\File;

class FileRepository extends CrudRepository
{
    public function model()
    {
        return File::class;
    }
}

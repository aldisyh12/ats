<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository extends CrudRepository
{
    public function model()
    {
        return Category::class;
    }
}

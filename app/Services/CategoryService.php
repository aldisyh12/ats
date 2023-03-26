<?php

namespace App\Services;

use App\Repositories\CategoryRepository;

class CategoryService
{
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $categoryList = $this->categoryRepository->get();

        return $categoryList;
//        return view('layouts.landrick.index', ['categoryList' => $categoryList]);
    }
}

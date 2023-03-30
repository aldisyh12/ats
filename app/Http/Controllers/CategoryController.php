<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        return $this->categoryService->index();
    }

    public function createForm()
    {
        return $this->categoryService->createForm();
    }

    public function store(Request $request)
    {
        return $this->categoryService->store($request);
    }
}

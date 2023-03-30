<?php

namespace App\Services;

use App\Helpers\Constants;
use App\Helpers\DateTimeConverter;
use App\Models\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CategoryService
{
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $categoryList = $this->categoryRepository->get();

        return view('admin.category.index', ['categoryList' => $categoryList]);
    }

    public function createForm()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        try {
            $courier = new Category();
            $courier->name = $request->name;
            $courier->created_at = DateTimeConverter::getDateTimeNow();
            $courier->created_by = auth()->user()->id;
            $this->categoryRepository->create($courier->toArray());
        } catch (\Exception $ex) {
            Log::error(Constants::ERROR, ['message' => $ex->getMessage()]);
            return redirect(route('admin.category'))->with(['error' => 'Kategori gagal ditambahkan']);
        }

        return redirect(route('admin.category'))->with(['success' => 'Kategori berhasil ditambahkan']);
    }
}

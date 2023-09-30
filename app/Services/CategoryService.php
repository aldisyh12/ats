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
//        $validator = Validator::make($request->all(), [
//            'name' => 'required'
//        ]);

        try {
            $record = new Category();
            $record->name = $request->name;
            $record->created_at = DateTimeConverter::getDateTimeNow();
            $record->created_by = auth()->user()->id;
            $this->categoryRepository->create($record->toArray());
        } catch (\Exception $ex) {
            Log::error(Constants::ERROR, ['message' => $ex->getMessage()]);
            return redirect(route('admin.category'))->with(['error' => 'Kategori gagal ditambahkan']);
        }

        return redirect(route('admin.category'))->with(['success' => 'Kategori berhasil ditambahkan']);
    }

    public function show($id)
    {
        $record = Category::find($id);

        return view('admin.category.update', ["record" => $record]);
    }

    public function update($id, Request $request)
    {
        try {
            $record = Category::find($id);
            $record->name = $request->name;
            $record->updated_at = DateTimeConverter::getDateTimeNow();
//            $record->updated_by = auth()->user()->id;
            $record->save();
        } catch (\Exception $ex) {
            Log::error(Constants::ERROR, ['message' => $ex->getMessage()]);
            return redirect(route('admin.category'))->with(['error' => 'Kategori gagal diubah']);
        }

        return redirect(route('admin.category'))->with(['success' => 'Kategori berhasil diubah']);
    }

    public function delete($id)
    {
        try {
            $record = Category::find($id);
            $record->delete();
        } catch (\Exception $ex) {
            Log::error(Constants::ERROR, ['message' => $ex->getMessage()]);
            return redirect(route('admin.category'))->with(['error' => 'Kategori gagal dihapus']);
        }

        return redirect(route('admin.category'))->with(['success' => 'Kategori berhasil dihapus']);
    }
}

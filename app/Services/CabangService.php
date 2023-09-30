<?php

namespace App\Services;

use App\Helpers\Constants;
use App\Helpers\DateTimeConverter;
use App\Models\Cabang;
use App\Models\Category;
use App\Repositories\CabangRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CabangService
{
    public function __construct(CabangRepository $cabangRepository)
    {
        $this->cabangRepository = $cabangRepository;
    }

    public function index()
    {
        $cabang = $this->cabangRepository->get();

        return view('admin.cabang.index', ['cabang' => $cabang]);
    }

    public function create()
    {
        return view('admin.cabang.create');
    }

    public function store(Request $request)
    {
        try {
            $file = $request->file('path');

            $nama_file = $file->getClientOriginalName();
            $file->move('pekerjaan',$file->getClientOriginalName());

            $images = new Cabang();
            $images->name = $request->name;
            $images->alamat = $request->alamat;
            $images->description = $request->description;
            $images->path = $nama_file;
            $images->created_by = auth()->user()->id;
            $images->created_at = DateTimeConverter::getDateTimeNow();
            $this->cabangRepository->create($images->toArray());
        } catch (\Exception $ex) {
            Log::error(Constants::ERROR, ['message' => $ex->getMessage()]);
            return redirect(route('admin.cabang'))->with(['error' => 'Cabang gagal ditambahkan']);
        }

        return redirect(route('admin.cabang'))->with(['success' => 'Cabang berhasil diubah']);
    }

    public function show($id)
    {
        $record = $this->cabangRepository->getById($id);

        return view('admin.cabang.update', ['record' => $record]);
    }

    public function update($id, Request $request)
    {
        try {
            $record = Cabang::find($id);
            $record->name = $request->name;
            $record->alamat = $request->alamat;
            $record->description = $request->description;
            $record->updated_at = DateTimeConverter::getDateTimeNow();
//            $record->updated_by = auth()->user()->id;
            $record->save();
        } catch (\Exception $ex) {
            Log::error(Constants::ERROR, ['message' => $ex->getMessage()]);
            return redirect(route('admin.cabang'))->with(['error' => 'Cabang gagal diubah']);
        }

        return redirect(route('admin.cabang'))->with(['success' => 'Cabang berhasil diubah']);
    }

    public function delete($id)
    {
        try {
            $record = Cabang::find($id);
            $record->delete();
        } catch (\Exception $ex) {
            Log::error(Constants::ERROR, ['message' => $ex->getMessage()]);
            return redirect(route('admin.cabang'))->with(['error' => 'Cabang gagal dihapus']);
        }

        return redirect(route('admin.cabang'))->with(['success' => 'Cabang berhasil dihapus']);
    }
}

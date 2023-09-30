<?php

namespace App\Services;

use App\Helpers\Constants;
use App\Helpers\DateTimeConverter;
use App\Models\Skill;
use App\Repositories\SkillRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SkillService
{
    public function __construct(SkillRepository $skillRepository)
    {
        $this->skillRepository = $skillRepository;
    }

    public function index()
    {
        $skill = $this->skillRepository->get();

        return view('admin.skill.index', ['skill' => $skill]);
    }

    public function createForm()
    {
        return view('admin.skill.create');
    }

    public function store(Request $request)
    {
        try {
            $record = new Skill();
            $record->name = $request->name;
            $record->created_at = DateTimeConverter::getDateTimeNow();
            $this->skillRepository->create($record->toArray());
        } catch (\Exception $ex) {
            Log::error(Constants::ERROR, ['message' => $ex->getMessage()]);
            return redirect(route('admin.skill'))->with(['error' => 'Skill gagal ditambahkan']);
        }

        return redirect(route('admin.skill'))->with(['success' => 'Skill berhasil ditambahkan']);
    }

    public function show($id)
    {
        $record = Skill::find($id);

        return view('admin.skill.update', ["record" => $record]);
    }

    public function update($id, Request $request)
    {
        try {
            $record = Skill::find($id);
            $record->name = $request->name;
            $record->updated_at = DateTimeConverter::getDateTimeNow();
            $record->save();
        } catch (\Exception $ex) {
            Log::error(Constants::ERROR, ['message' => $ex->getMessage()]);
            return redirect(route('admin.skill'))->with(['error' => 'Skill gagal diubah']);
        }

        return redirect(route('admin.skill'))->with(['success' => 'Skill berhasil diubah']);
    }

    public function delete($id)
    {
        try {
            $record = Skill::find($id);
            $record->delete();
        } catch (\Exception $ex) {
            Log::error(Constants::ERROR, ['message' => $ex->getMessage()]);
            return redirect(route('admin.skill'))->with(['error' => 'Skill gagal dihapus']);
        }

        return redirect(route('admin.skill'))->with(['success' => 'Skill berhasil dihapus']);
    }
}

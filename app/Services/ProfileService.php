<?php

namespace App\Services;

use App\Helpers\Constants;
use App\Helpers\DateTimeConverter;
use App\Models\CvEducation;
use App\Models\CvExperience;
use App\Models\CvProfile;
use App\Models\CvResume;
use App\Models\CvSKill;
use App\Models\File;
use App\Models\Skill;
use App\Models\User;
use App\Repositories\ProfileRepository;
use App\Repositories\SkillRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProfileService
{
    public function __construct(
        ProfileRepository $profileRepository,
        SkillRepository $skillRepository
    )
    {
        $this->profileRepository = $profileRepository;
        $this->skillRepository = $skillRepository;
    }

    public function index()
    {
        $user = User::where('id', auth()->user()->id)->first();
        $foto = File::where('created_by', $user->id)->latest('path')->first();
        $cv = CvProfile::where('user_id', $user->id)->first();
        $cv['pengalaman'] = CvExperience::where('cv_profile_id', $cv->id)->get();
        $cv['pendidikan'] = CvEducation::where('cv_profile_id', $cv->id)->get();
        $cv['keahlian'] = CvSKill::where('cv_profile_id', $cv->id)->with('skill')->get();

        $skill = Skill::get();

        $user['cv_profile'] = CvProfile::where('user_id', $user->id)->first();
        $user['cv_experience'] = CvExperience::where('cv_profile_id', $user['cv_profile']->id)->get();
        $user['cv_education'] = CvEducation::where('cv_profile_id', $user['cv_profile']->id)->get();
        $user['cv_skill'] = CvSKill::where('cv_profile_id', $user['cv_profile']->id)->get();

        if(!$user['cv_profile'])
        {
            $user['cv_profile_score'] = 0;
        }else{
            $user['cv_profile_score'] = 25;
        }

        if(count($user['cv_experience']) === 0)
        {
            $user['cv_experience_score'] = 0;
        }else{
            $user['cv_experience_score'] = 25;
        }

        if(count($user['cv_education']) === 0)
        {
            $user['cv_education_score'] = 0;
        }else{
            $user['cv_education_score'] = 25;
        }

        if(count($user['cv_skill']) === 0)
        {
            $user['cv_skill_score'] = 0;
        }else{
            $user['cv_skill_score'] = 25;
        }

        $user['score'] = $user['cv_profile_score'] + $user['cv_experience_score'] + $user['cv_education_score'] + $user['cv_skill_score'];

        return view('user.profile.index', ["cv" => $cv, "skill" => $skill, 'foto' => $foto, 'user' => $user]);
    }

    public function createProfile()
    {
        return view('user.profile.create-profile');
    }

    public function updateCv(Request $request)
    {
        if($request->status == 1){
            try {
                $record = CvProfile::where('user_id', auth()->user()->id)->first();
                $record->update([
                    "about" => $request->about,
                    "is_new" => 2,
                    "is_updated" => 2,
                ]);
            } catch (\Exception $ex) {
                Log::error(Constants::ERROR, ['message' => $ex->getMessage()]);
                return redirect()->back()->with('error', 'Perubahan gagal disimpan');
            }

            return redirect()->back()->with('success', 'Perubahan berhasil disimpan');
        }
        if($request->status == 2){
            try {
                $val = CvProfile::where('user_id', auth()->user()->id)->first();
                CvExperience::create([
                    "cv_profile_id" => $val->id,
                    "posisi" => $request->posisi,
                    "perusahaan" => $request->perusahaan,
                    "date_start" => $request->date_start,
                    "date_end" => $request->date_end,
                    "created_at" => DateTimeConverter::getDateTimeNow(),
                ]);
            } catch (\Exception $ex) {
                Log::error(Constants::ERROR, ['message' => $ex->getMessage()]);
                return redirect()->back()->with('error', 'Perubahan gagal disimpan');
            }

            return redirect()->back()->with('success', 'Perubahan berhasil disimpan');
        }
        if($request->status == 3){
            try {
                $val = CvProfile::where('user_id', auth()->user()->id)->first();
                CvEducation::create([
                    "cv_profile_id" => $val->id,
                    "institusi" => $request->institusi,
                    "gelar" => $request->gelar,
                    "bidang_studi" => $request->bidang_studi,
                    "date_start" => $request->date_start,
                    "date_end" => $request->date_end,
                    "created_at" => DateTimeConverter::getDateTimeNow(),
                ]);
            } catch (\Exception $ex) {
                Log::error(Constants::ERROR, ['message' => $ex->getMessage()]);
                return redirect()->back()->with('error', 'Perubahan gagal disimpan');
            }

            return redirect()->back()->with('success', 'Perubahan berhasil disimpan');
        }
        if($request->status == 4){
            try {
                $val = CvProfile::where('user_id', auth()->user()->id)->first();
                CvSKill::create([
                    "cv_profile_id" => $val->id,
                    "skill_id" => $request->skill_id,
                    "created_at" => DateTimeConverter::getDateTimeNow(),
                ]);
            } catch (\Exception $ex) {
                Log::error(Constants::ERROR, ['message' => $ex->getMessage()]);
                return redirect()->back()->with('error', 'Perubahan gagal disimpan');
            }

            return redirect()->back()->with('success', 'Perubahan berhasil disimpan');
        }
        if($request->status == 5){
            try {
                $val = CvProfile::where('user_id', auth()->user()->id)->first();
                CvResume::create([
                    "cv_profile_id" => $val->id,
                    "resume_path" => $request->resume_path,
                    "created_at" => DateTimeConverter::getDateTimeNow(),
                ]);
            } catch (\Exception $ex) {
                Log::error(Constants::ERROR, ['message' => $ex->getMessage()]);
                return redirect()->back()->with('error', 'Perubahan gagal disimpan');
            }

            return redirect()->back()->with('success', 'Perubahan berhasil disimpan');
        }
        if($request->status == 6){
            try {
                $val = CvProfile::where('user_id', auth()->user()->id)->first();
                CvResume::create([
                    "cv_profile_id" => $val->id,
                    "facebook" => $request->facebook,
                    "twitter" => $request->twitter,
                    "instagram" => $request->instagram,
                    "linked_in" => $request->linked_in,
                    "created_at" => DateTimeConverter::getDateTimeNow(),
                ]);
            } catch (\Exception $ex) {
                Log::error(Constants::ERROR, ['message' => $ex->getMessage()]);
                return redirect()->back()->with('error', 'Perubahan gagal disimpan');
            }

            return redirect()->back()->with('success', 'Perubahan berhasil disimpan');
        }
    }

    public function deletePengelamanKerja($id)
    {
        try {
            $record = CvExperience::where('id',$id)->first();
            if($record != null){
                $record->delete();
            }
        } catch (\Exception $ex) {
            Log::error(Constants::ERROR, ['message' => $ex->getMessage()]);
            return redirect()->back()->with('error', 'Perubahan gagal disimpan');
        }

        return redirect()->back()->with('success', 'Perubahan berhasil disimpan');
    }

    public function deletePendidikan($id)
    {
        try {
            $record = CvEducation::where('id',$id)->first();
            if($record != null){
                $record->delete();
            }
        } catch (\Exception $ex) {
            Log::error(Constants::ERROR, ['message' => $ex->getMessage()]);
            return redirect()->back()->with('error', 'Perubahan gagal disimpan');
        }

        return redirect()->back()->with('success', 'Perubahan berhasil disimpan');
    }

    public function ubahGambar(Request $request)
    {
        try {
            $file = $request->file('path');

            $nama_file = $file->getClientOriginalName();
            $file->move('pekerjaan',$file->getClientOriginalName());

            File::create([
                "path" => $nama_file,
                "created_by" => auth()->user()->id,
                "created_at" => DateTimeConverter::getDateTimeNow(),
            ]);
        } catch (\Exception $ex) {
            Log::error(Constants::ERROR, ['message' => $ex->getMessage()]);
            return redirect()->back()->with('error', 'Perubahan gagal disimpan');
        }

        return redirect()->back()->with('success', 'Perubahan berhasil disimpan');
    }
}

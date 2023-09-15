<?php

namespace App\Services;

use App\Helpers\Constants;
use App\Helpers\DateTimeConverter;
use App\Models\CvEducation;
use App\Models\CvExperience;
use App\Models\CvProfile;
use App\Models\CvResume;
use App\Models\CvSKill;
use App\Models\User;
use App\Repositories\ProfileRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProfileService
{
    public function __construct(ProfileRepository $profileRepository)
    {
        $this->profileRepository = $profileRepository;
    }

    public function index()
    {
        $user = User::where('id', auth()->user()->id)->first();
        $cv = CvProfile::where('user_id', $user->id)->first();
        $cv['pengalaman'] = CvExperience::where('cv_profile_id', $cv->id)->get();
        $cv['pendidikan'] = CvEducation::where('cv_profile_id', $cv->id)->get();
        $cv['keahlian'] = CvSKill::where('cv_profile_id', $cv->id)->get();

        return view('user.profile.index', ["cv" => $cv]);
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
}

<?php

namespace App\Services;

use App\Helpers\Constants;
use App\Models\Candidate;
use App\Models\Category;
use App\Models\CvEducation;
use App\Models\CvExperience;
use App\Models\CvProfile;
use App\Models\CvSKill;
use App\Models\File;
use App\Models\Job;
use App\Models\User;
use App\Repositories\CandidateRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CandidateService
{
    public function __construct(CandidateRepository $candidateRepository)
    {
        $this->candidateRepository = $candidateRepository;
    }

    public function index()
    {
        $candidateList = $this->candidateRepository->get();
        $candidateList->map(function ($q) {
            $q['job'] = Job::where('id', $q->job_id)->with('category', 'file')->first();
            $q['user'] = User::where('id', $q->user_id)->first();
            $q['cv_profile'] = CvProfile::where('user_id', $q->user_id)->first();
            $q['cv_experience'] = CvExperience::where('cv_profile_id', $q['cv_profile']->id)->get();
            $q['cv_education'] = CvEducation::where('cv_profile_id', $q['cv_profile']->id)->get();
            $q['cv_skill'] = CvSKill::where('cv_profile_id', $q['cv_profile']->id)->get();

            if(!$q['cv_profile'])
            {
                $q['cv_profile_score'] = 0;
            }else{
                $q['cv_profile_score'] = 25;
            }

            if(count($q['cv_experience']) === 0)
            {
                $q['cv_experience_score'] = 0;
            }else{
                $q['cv_experience_score'] = 25;
            }

            if(count($q['cv_education']) === 0)
            {
                $q['cv_education_score'] = 0;
            }else{
                $q['cv_education_score'] = 25;
            }

            if(count($q['cv_skill']) === 0)
            {
                $q['cv_skill_score'] = 0;
            }else{
                $q['cv_skill_score'] = 25;
            }

            $q['score'] = $q['cv_profile_score'] + $q['cv_experience_score'] + $q['cv_education_score'] + $q['cv_skill_score'];
            return $q;
        });

        return view('admin.candidate.index', ['candidateList' => $candidateList]);
    }

    public function update($id, Request $request)
    {
        try {
            $record = Candidate::where('id', $id)->first();
            $record->update([
                "status" => $request->status
            ]);
        } catch (\Exception $ex) {
            Log::error(Constants::ERROR, ['message' => $ex->getMessage()]);
            return redirect(route('admin.candidate'))->with(['error' => 'Gagal']);
        }

        return redirect(route('admin.candidate'))->with(['success' => 'berhasil']);
    }

    public function show($id)
    {
        try {
            $record = Candidate::where('id', $id)->first();

            $record['pekerjaan'] = Job::where('id', $record->job_id)->first();
            $record['category'] = Category::where('id', $record['pekerjaan']->category_id ?? null)->first();
            $record['user_pembuat'] = User::where('id', $record['pekerjaan']->created_by ?? null)->first();
            $record['images'] = File::where('id_job', $record['pekerjaan']->id ?? null)->get();


            $record['user'] = User::where('id', $record->user_id)->first();
            $record['profile'] = CvProfile::where('user_id', $record->user_id)->first();
            $record['pengalaman'] = CvExperience::where('cv_profile_id', $record['profile']->id)->get();
            $record['pendidikan'] = CvEducation::where('cv_profile_id', $record['profile']->id)->get();
            $record['keahlian'] = CvSKill::where('cv_profile_id', $record['profile']->id)->get();
        } catch (\Exception $ex) {
            Log::error(Constants::ERROR, ['message' => $ex->getMessage()]);
            return redirect(route('admin.candidate'))->with(['error' => 'Gagal']);
        }

        return view('admin.candidate.show', ["record" => $record]);
    }
}

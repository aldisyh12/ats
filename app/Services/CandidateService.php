<?php

namespace App\Services;

use App\Models\Job;
use App\Models\User;
use App\Repositories\CandidateRepository;

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
            return $q;
        });


        return view('admin.candidate.index', ['candidateList' => $candidateList]);
    }
}

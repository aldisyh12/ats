<?php

namespace App\Services;

use App\Repositories\CandidateRepository;

class CandidateService
{
    public function __construct(CandidateRepository $candidateRepository)
    {
        $this->candidateRepository = $candidateRepository;
    }

    public function index()
    {
        return view('admin.candidate.index');
    }
}

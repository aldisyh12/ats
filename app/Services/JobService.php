<?php

namespace App\Services;

use App\Repositories\JobRepository;

class JobService
{
    public function __construct(JobRepository $jobRepository)
    {
        $this->jobRepository = $jobRepository;
    }

    public function index()
    {
        return view('admin.job.index');
    }
}

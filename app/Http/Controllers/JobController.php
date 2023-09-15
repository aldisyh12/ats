<?php

namespace App\Http\Controllers;

use App\Services\JobService;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function __construct(JobService $jobService)
    {
        $this->jobService = $jobService;
    }

    public function index()
    {
        return $this->jobService->index();
    }

    public function createForm()
    {
        return $this->jobService->createForm();
    }

    public function create(Request $request)
    {
        return $this->jobService->store($request);
    }

    /*
     * FUNCTION PEKERJAAN USER
     */
    public function indexUser()
    {
        return $this->jobService->indexUser();
    }

    public function detailJobUser($id)
    {
        return $this->jobService->detailJobUser($id);
    }

    public function lamarKerja(Request $request)
    {
        return $this->jobService->lamarKerja($request);
    }

    public function pekerjaanUser()
    {
        return $this->jobService->pekerjaanUser();
    }
}

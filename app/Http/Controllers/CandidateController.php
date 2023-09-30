<?php

namespace App\Http\Controllers;

use App\Services\CandidateService;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function __construct(CandidateService $candidateService)
    {
        $this->candidateService = $candidateService;
    }

    public function index()
    {
        return $this->candidateService->index();
    }

    public function update($id, Request $request)
    {
        return $this->candidateService->update($id, $request);
    }

    public function show($id)
    {
        return $this->candidateService->show($id);
    }
}

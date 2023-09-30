<?php

namespace App\Http\Controllers;

use App\Services\SkillService;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function __construct(SkillService $skillService)
    {
        $this->skillService = $skillService;
    }

    public function index()
    {
        return $this->skillService->index();
    }

    public function createForm()
    {
        return $this->skillService->createForm();
    }

    public function store(Request $request)
    {
        return $this->skillService->store($request);
    }

    public function show($id)
    {
        return $this->skillService->show($id);
    }

    public function update($id, Request $request)
    {
        return $this->skillService->update($id, $request);
    }

    public function delete($id)
    {
        return $this->skillService->delete($id);
    }
}

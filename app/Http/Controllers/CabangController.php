<?php

namespace App\Http\Controllers;

use App\Services\CabangService;
use Illuminate\Http\Request;

class CabangController extends Controller
{
    public function __construct(CabangService $cabangService)
    {
        $this->cabangService = $cabangService;
    }

    public function index()
    {
        return $this->cabangService->index();
    }

    public function create()
    {
        return $this->cabangService->create();
    }

    public function store(Request $request)
    {
        return $this->cabangService->store($request);
    }

    public function show($id)
    {
        return $this->cabangService->show($id);
    }

    public function update($id, Request $request)
    {
        return $this->cabangService->update($id, $request);
    }

    public function delete($id)
    {
        return $this->cabangService->delete($id);
    }
}

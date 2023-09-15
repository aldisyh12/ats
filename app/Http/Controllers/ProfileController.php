<?php

namespace App\Http\Controllers;

use App\Services\ProfileService;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

    public function index()
    {
        return $this->profileService->index();
    }

    public function create()
    {
        return $this->profileService->createProfile();
    }

    public function updateCv(Request $request)
    {
        return $this->profileService->updateCv($request);
    }

}

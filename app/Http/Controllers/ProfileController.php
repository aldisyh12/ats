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

    public function deletePengelaman($id)
    {
        return $this->profileService->deletePengelamanKerja($id);
    }

    public function deletePendidikan($id)
    {
        return $this->profileService->deletePendidikan($id);
    }

    public function ubahGambar(Request $request)
    {
        return $this->profileService->ubahGambar($request);
    }

}

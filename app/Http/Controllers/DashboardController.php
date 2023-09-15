<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobUser;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboardAdmin()
    {
        $countJob = Job::count();
        $countPelamar = User::where('role_id', 2)->count();

        $user = User::where('id', auth()->user()->id)->first();

        return view('admin.dashboard.index', ['countJob' => $countJob, 'countPelamar' => $countPelamar, 'user' => $user]);
    }

    public function dashboardUser()
    {
        $countJob = JobUser::where('candidate_id', auth()->user()->id)->count();

        return view('user.dashboard.index', ['countJob' => $countJob]);
    }
}

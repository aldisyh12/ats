<?php

namespace App\Http\Controllers;

use App\Helpers\Constants;
use App\Helpers\DateTimeConverter;
use App\Models\Cabang;
use App\Models\Category;
use App\Models\File;
use App\Models\Job;
use App\Models\Testimony;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage()
    {
        $penilaian = Testimony::get();
        $penilaian->map(function ($q) {
            $q['user'] = User::where('id', $q->created_by)->first();
            $q['penilaian'] = File::where('created_by', $q->created_by)->whereNull('id_job')->latest('path')->first();
            return $q;
        });

        return view('layouts.landrick.index', ['penilaian' => $penilaian]);
    }

    public function pekerjaan()
    {
        $job = Job::with('category', 'file')->get();
//        $job->map(function ($q) {
//            $q['category'] = Category::where('id', $q->job_id)->with('category', 'file')->first();
//            return $q;
//        });

        return view('layouts.landrick.pekerjaan', ["job" => $job]);
    }

    public function aboutus()
    {
        return view('layouts.landrick.about');
    }

    public function cabang()
    {
        $cabang = Cabang::get();
        $cabang->map(function ($q) {
            $q['user'] = User::where('id', $q->created_by)->first();
            return $q;
        });

        return view('layouts.landrick.cabang', ['cabang' => $cabang]);
    }
}

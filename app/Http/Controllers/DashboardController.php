<?php

namespace App\Http\Controllers;

use App\Helpers\Constants;
use App\Helpers\DateTimeConverter;
use App\Models\Cabang;
use App\Models\Job;
use App\Models\JobUser;
use App\Models\Testimony;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function dashboardAdmin()
    {
        $countJob = Job::count();
        $countPelamar = User::where('role_id', 2)->count();
        $countCabang = Cabang::count();

        $user = User::where('id', auth()->user()->id)->first();

        return view('admin.dashboard.index', ['countJob' => $countJob, 'countPelamar' => $countPelamar, 'user' => $user, 'countCabang' => $countCabang]);
    }

    public function dashboardUser()
    {
        $countJob = JobUser::where('candidate_id', auth()->user()->id)->count();
        $testimoni = Testimony::where('created_by', auth()->user()->id)->first();

        return view('user.dashboard.index', ['countJob' => $countJob, 'testimoni' => $testimoni]);
    }

    public function penilaian(Request $request)
    {
        try {
            $record = new Testimony();
            $record->description = $request->description;
            $record->created_at = DateTimeConverter::getDateTimeNow();
            $record->created_by = auth()->user()->id;
            $record->save();
        } catch (\Exception $ex) {
            Log::error(Constants::ERROR, ['message' => $ex->getMessage()]);
            return redirect(route('user.dashboard'))->with(['error' => 'Penilaian gagal ditambahkan']);
        }

        return redirect(route('user.dashboard'))->with(['success' => 'Penilaian berhasil ditambahkan']);
    }
}

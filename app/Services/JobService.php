<?php

namespace App\Services;

use App\Helpers\Constants;
use App\Helpers\DateTimeConverter;
use App\Models\Candidate;
use App\Models\Category;
use App\Models\CvExperience;
use App\Models\CvProfile;
use App\Models\File;
use App\Models\Job;
use App\Models\JobUser;
use App\Models\User;
use App\Repositories\CategoryRepository;
use App\Repositories\FileRepository;
use App\Repositories\JobRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class JobService
{
    public function __construct(
        JobRepository $jobRepository,
        FileRepository $fileRepository,
        CategoryRepository $categoryRepository
    )
    {
        $this->jobRepository = $jobRepository;
        $this->fileRepository = $fileRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $jobList = $this->jobRepository->with('category', 'file')->get();

        return view('admin.job.index', ['jobList' => $jobList]);
    }

    public function createForm()
    {
        $categoryList = $this->categoryRepository->get();

        return view('admin.job.create', ['categoryList' => $categoryList]);
    }

    public function store(Request $request)
    {
        try {
            $record = new Job();
            $record->job_header = $request->job_header;
            $record->pengalaman = $request->pengalaman;
            $record->jabatan = $request->jabatan;
            $record->category_id = $request->category_id;
            $record->description = $request->description;
            $record->date = $request->date;
            $record->created_at = DateTimeConverter::getDateTimeNow();
            $record->created_by = auth()->user()->id;
            $result = $this->jobRepository->create($record->toArray());

            $this->images($result, $request);

        } catch (\Exception $ex) {
            Log::error(Constants::ERROR, ['message' => $ex->getMessage()]);
            return redirect(route('admin.job'))->with(['error' => 'Pekerjaan gagal ditambahkan']);
        }

        return redirect(route('admin.job'))->with(['success' => 'Pekerjaan berhasil ditambahkan']);
    }

    public function images(Job $job, Request $request)
    {
        try {
            $file = $request->file('path');

            $nama_file = $file->getClientOriginalName();
            $file->move('pekerjaan',$file->getClientOriginalName());

            $images = new File();
            $images->id_job = $job->id;
            $images->path = $nama_file;
            $images->created_at = DateTimeConverter::getDateTimeNow();
            $this->fileRepository->create($images->toArray());
        } catch (\Exception $ex) {
            Log::error(Constants::ERROR, ['message' => $ex->getMessage()]);
            return redirect(route('admin.job'))->with(['error' => 'Pekerjaan gagal ditambahkan']);
        }
    }

    public function show($id)
    {
        $record = Job::where('id', $id)->first();
        $record['images'] = File::where('id_job', $record->id)->first();
        $record['category'] = Category::where('id', $record->category_id)->first();

        $categoryList = $this->categoryRepository->get();

        return view('admin.job.update', ["record" => $record, "categoryList" => $categoryList]);
    }

    public function update($id, Request $request)
    {
        try {
            $file = $request->file('path');

            $nama_file = $file->getClientOriginalName();
            $file->move('pekerjaan',$file->getClientOriginalName());

            $record = Job::find($id);
            $file = File::where('id_job', $record->id)->first();
            $record->update([
                "job_header" => $request->job_header,
                "category_id" => $request->category_id,
                "description" => $request->description,
                "date" => $request->date,
                "pengalaman" => $request->pengalaman,
                "jabatan" => $request->jabatan,
            ]);

            $file->update([
                "path" => $nama_file
            ]);

        } catch (\Exception $ex) {
            Log::error(Constants::ERROR, ['message' => $ex->getMessage()]);
            return redirect(route('admin.job'))->with(['error' => 'Pekerjaan gagal diubah']);
        }

        return redirect(route('admin.job'))->with(['success' => 'Pekerjaan berhasil diubah']);
    }

    public function delete($id)
    {
        try {
            $record = Job::find($id);
            $images = File::where('id_job', $record->id)->first();

            if($record != null)
            {
                $record->delete();
                $images->delete();
            }
        } catch (\Exception $ex) {
            Log::error(Constants::ERROR, ['message' => $ex->getMessage()]);
            return redirect(route('admin.job'))->with(['error' => 'Pekerjaan gagal dihapus']);
        }
        return redirect(route('admin.job'))->with(['success' => 'Pekerjaan berhasil dihapus']);
    }

    /*
     * INI FUNCTION CARI KERJA USER
     */
    public function indexUser()
    {
        $jobList = $this->jobRepository->with('category', 'file')->get();
        $categoryList = $this->categoryRepository->get();
        $user = User::where('id', auth()->user()->id)->first();
        $cv = CvProfile::where('user_id', $user->id)->first();

        return view('user.job.index', ['jobList' => $jobList, 'categoryList' => $categoryList, 'cv' => $cv]);
    }

    public function detailJobUser($id)
    {
        $job = $this->jobRepository->where('id', $id)->first();
        $job['category'] = Category::where('id', $job->category_id ?? null)->first();
        $job['user'] = User::where('id', $job->created_by ?? null)->first();
        $job['images'] = File::where('id_job', $job->id ?? null)->get();

        return view('user.job.detail', ['job' => $job]);
    }

    public function lamarKerja(Request $request)
    {
        try {
            $record = JobUser::create([
                "job_id" => $request->job_id,
                "candidate_id" => auth()->user()->id,
                "status" => 0,
                "date" => DateTimeConverter::getDateTimeNow(),
                "created_at" => DateTimeConverter::getDateTimeNow(),
            ]);

            Candidate::create([
                "job_id" => $request->job_id,
                "user_id" => auth()->user()->id,
                "created_at" => DateTimeConverter::getDateTimeNow(),
            ]);

            if($request->file('path') != null){
                $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('path')->getClientOriginalName());
                $request->file('path')->move(public_path('pekerjaan'), $filename);

                File::create([
                    "id_job_user" => $request->job_id,
                    "created_by" => auth()->user()->id,
                    "path" => $filename,
                ]);
            }

        } catch (\Exception $ex) {
            Log::error(Constants::ERROR, ['message' => $ex->getMessage()]);
            return redirect(route('user.job.detail', $request->job_id))->with(['error' => 'Gagal melamar pekerjaan']);
        }

        return redirect(route('user.job.list', $request->job_id))->with(['success' => 'Berhasil melamar pekerjaan']);
    }

    public function pekerjaanUser()
    {
        try {
            $record = JobUser::where('candidate_id', auth()->user()->id)->get();
            $cv = CvProfile::where('user_id', auth()->user()->id)->first();
            $categoryList = $this->categoryRepository->get();

            $record->map(function ($q) {
                $q['job'] = Job::where('id', $q->job_id)->with('category', 'file')->first();
                $q['user'] = User::where('id', $q->candidate_id)->first();
                return $q;
            });

//            return $record;
        } catch (\Exception $ex) {
            Log::error(Constants::ERROR, ['message' => $ex->getMessage()]);
            return view('user.user-job.index', ['record' => $record]);
        }

        return view('user.user-job.index', ['record' => $record, 'cv' => $cv, 'categoryList' =>$categoryList]);
    }
}

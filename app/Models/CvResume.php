<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CvResume extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "cv_resume";
}

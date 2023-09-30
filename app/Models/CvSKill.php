<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CvSKill extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "cv_skill";

    function skill()
    {
        return $this->hasOne('App\Models\Skill', 'id', 'skill_id');
    }
}

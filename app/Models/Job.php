<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "job";
    public $timestamps = false;

    function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }

    function file()
    {
        return $this->hasOne('App\Models\File', 'id_job', 'id');
    }
}

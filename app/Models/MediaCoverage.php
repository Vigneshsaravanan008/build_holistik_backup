<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MediaCoverage extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];

    public function mediacoverage()
    {
        return $this->belongsTo(MediaCoverageCategory::class,"media_coverage_category_id","id");
    }
}

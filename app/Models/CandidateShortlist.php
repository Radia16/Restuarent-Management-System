<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateShortlist extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function candidate(){
        return $this->belongsTo(RecruitmentAddCanditate::class,'candidate_id','id');
    }

    public function designation(){
        return $this->belongsTo(Designation::class,'designation_id','id');
    }



}


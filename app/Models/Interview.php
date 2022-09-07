<?php

namespace App\Models;
use \Znck\Eloquent\Traits\BelongsToThrough;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Interview extends Model
{

    use HasFactory;

    protected $guarded = [];

    public function candidates(){
        return $this->belongsTo(RecruitmentAddCanditate::class,'candidate_id','id');
    }

    public function designation(){
        return $this->belongsTo(Designation::class,'designation_id','id');
    }
}

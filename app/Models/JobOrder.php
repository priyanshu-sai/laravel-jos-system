<?php

namespace App\Models;

use App\Models\Conductor;
use App\Models\Contractor;
use App\Models\TypeOfWork;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobOrder extends Model
{
    use SoftDeletes;
    
    public $guarded = [];

    public function typeOfWork()
    {
        return $this->belongsTo(TypeOfWork::class);
    }

    public function contractor()
    {
        return $this->belongsTo(Contractor::class);
    }

    public function conductor()
    {
        return $this->belongsTo(Conductor::class);
    }

    public function jobOrderStatement()
    {
        return $this->belongsToMany(JobOrderStatement::class, 'jos_job_order_links');
    }

}

<?php

namespace App\Models;

use App\Models\JobOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobOrderStatement extends Model
{
    
    use SoftDeletes;
    protected $guarded = [];

    public function jobOrders()
    {
        return $this->belongsToMany(JobOrder::class, 'jos_job_order_links');
    }

    public function contractor()
    {
        return $this->belongsTo(Contractor::class);
    }

    public function conductor()
    {
        return $this->belongsTo(Conductor::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [ //$guarded : everything is allowed 
        'name',
        'age',
        'phone',
        'membership_type',
        'plan_id',

    ]; //only these columns allowed to be filled nothing else 
    public function plan()  //relationship: connecting two models
    {
        return $this->belongsTo(Plan::class); //this member belongs to one plan
    }
}

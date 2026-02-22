<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name',
        'age',
        'phone',
        'membership_type',

    ]; //only these columns allowed to be filled nothing else 
}

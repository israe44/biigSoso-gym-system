<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'name',
        'price',
    ];
    public function members() 
    {
        return $this->hasMany(Member::class); //one plan has many members
    }
}

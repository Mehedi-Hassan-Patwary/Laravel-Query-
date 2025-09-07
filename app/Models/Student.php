<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'email', 'age', 'city_id'];

    public function city()
    {
        return $this->belongsTo(\App\Models\City::class);
    }
}

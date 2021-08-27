<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;
    protected function Cat(){
        return $this->hasOne('App\Models\Category', 'id', 'category');
    }
    protected function City(){
        return $this->hasOne('App\Models\City', 'id', 'city_id');
    }
    public function course()
    {
        return $this->hasMany('App\Models\Course', 'College_id', 'id');
    }
}

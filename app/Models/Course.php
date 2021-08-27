<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected function Cou(){
        return $this->hasOne('App\Models\College', 'id', 'course_id');
    }
}

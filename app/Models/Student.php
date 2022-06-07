<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function profile(){
         return $this->hasOne('App\Models\Profile','student_id','id');
    }
    public function comment()
    {
        return $this->hasMany('App\Models\Comment','student_id', 'id');
    }
    public function subjects(){
        return $this->belongsToMany(Subject::class, 'student__subjects');
    }
}

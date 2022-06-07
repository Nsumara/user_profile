<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function student(){
        return $this->belongsToMany('App\Models\Student','student_id','id');
    }
}

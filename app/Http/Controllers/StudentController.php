<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function addStudent()
    {
        $stu = new Student();
        $stu->name = "Nurgus BIBI";
        $stu->email = "Nurgus@gmail.com";
        $stu->save();
        return "data enter Successfully ";
    }
    public function showStudent($id){
        $student=Student::find($id)->subjects;
        return $student;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function addSubject(){
    $sbj= new Subject();
    $sbj->subject='phy';
    $sbj->save();


    $stuids=[1,2,5,6];
    $sbj->students()->attach($stuids);
    return "subject enter Sucessfully";
    }
    public function showSubject($id)
    {
        $subject = Subject::find($id)->students;
        return $subject;

}
}
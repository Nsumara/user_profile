<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;
use App\Models\Student;
use App\Models\Comment;
use App\Models\Student_Subject;
use App\Models\Subject;


class profileCreate extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    Student:: create([
        'name'=>'Sumara Naseem',
        'email' => 'Sumara@gmail.com',
    ]);
        Student::create([
            'name' => 'Asima Ghulam Abbas',
            'email' => 'Asima@gmail.com',
        ]);
        Student::create([
            'name' => 'Rashid Ali',
            'email' => 'Rashidali@gmail.com',
        ]);
        Student::create([
            'name' => 'Asif Raza',
            'email' => 'Asif@gmail.com',
        ]);

    // Profile::create([
    //    'student_id'=>1,
    //    'address'=>'noorkot',
    //    'phone'=>'12345678',
    //    'avatar'=>'asd',
    // ]);
    // Comment::create([
    //     'student_id'=>'1',
    //     'comment'=>'brillint',
    // ]);
    //     Comment::create([
    //         'student_id' => '2',
    //         'comment' => 'Good Student',
    //     ]);
    //     Comment::create([
    //         'student_id' => '3',
    //         'comment' => 'Good performs',
    //     ]);
        Subject::create([
            'subject'=>'English'
        ]);
        Subject::create([
            'subject' => 'urdu'
        ]);
        Subject::create([
            'subject' => 'Math'
        ]);
        Subject::create([
            'subject' => 'physics'
        ]);
        Student_Subject::create([
            'student_id'=>2,
            'subject_id'=>1,
        ]);
        Student_Subject::create([
            'student_id' => 2,
            'subject_id' => 2,
        ]);
        Student_Subject::create([
            'student_id' => 2,
            'subject_id' => 3,
        ]);
        Student_Subject::create([
            'student_id' => 2,
            'subject_id' => 4,
        ]);
        Student_Subject::create([
            'student_id' => 3,
            'subject_id' => 1,
        ]);
        Student_Subject::create([
            'student_id' => 3,
            'subject_id' => 2,
        ]);
        Student_Subject::create([
            'student_id' => 4,
            'subject_id' => 3,
        ]);
        Student_Subject::create([
            'student_id' => 4,
            'subject_id' => 4,
        ]);

    }
}

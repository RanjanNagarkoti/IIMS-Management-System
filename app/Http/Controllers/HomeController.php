<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\Subject;
use App\Models\Classes;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $student = Student::count();
        $teacher = Teacher::count();
        $subject = Subject::count();
        $class = Classes::count();
        return view('index', compact('student', 'teacher', 'subject', 'class'));
    }
}

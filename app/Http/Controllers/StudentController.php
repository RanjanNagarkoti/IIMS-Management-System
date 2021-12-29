<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Classes;
use App\Models\Faculty;
use App\Models\Section;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    public function index(){
        $data = $this->student->all();
        return view('student.index', compact('data'));
    }

    public function create(){
        return view('student.create');
    }

    public function store(Request $request){
        $data = $request->all();
        $extension = $data['photo']->extension();
        $unique = date('ymd').time();
        $name = $unique.'.'.$extension;
        $data['photo'] = $name;
        $request->photo->move(public_path('/img/profile'), $name);
        $this->student->create($data);
        return redirect('/student')->with('success', 'Student added successfully.');
    }

    public function show($id)
    {
        $data = $this->student->findOrFail($id);
        $section = DB::table('sections')->where('id', $data['section_id'])->value('name');
        $faculty = DB::table('faculties')->where('id', $data['faculty_id'])->value('name');
        $class = DB::table('classes')->where('id', $data['class_id'])->value('name');
        return view('student.show', compact('data', 'section', 'faculty', 'class'));
    }

    public function destroy(Request $request, $id){
        $data = $request->except('_method', '_token');
        $this->student->where('id', "$id")->delete($data);
        return redirect('/student')->with('success', 'Student data deleted successfully.');
    }

    public function edit($id){
        $student = $this->student->findOrFail($id);
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, $id){
        $data = $request->except('_method', '_token'); 
        
        $extension = $data['photo']->extension();
        $unique = date('ymd').time();
        $name = $unique.'.'.$extension;
        $data['photo'] = $name;
        $request->photo->move(public_path('/img/profile'), $name);

        $this->student->where('id', "$id")->update($data);
        return redirect('/student')->with('success', 'Student detail updated successfully.');
    }
}

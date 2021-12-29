<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function __construct(Teacher $teacher)
    {
        $this->teacher = $teacher;
    }

    public function index()
    {
        $data = $this->teacher->all();
        return view('teacher.index', compact('data'));
    }


    public function create()
    {
        return view('teacher.create');
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $extension = $data['photo']->extension();
        $unique = date('ymd').time();
        $name = $unique.'.'.$extension;
        $data['photo'] = $name;
        $request->photo->move(public_path('/img/profile'), $name);
        $this->teacher->create($data);
        return redirect('/teacher')->with('success', 'Teacher detail created successfully.');
    }


    public function show($id)
    {
        $data = $this->teacher->findOrFail($id);
        return view('teacher.show', compact('data'));
    }


    public function edit($id)
    {
        $teacher = $this->teacher->findOrFail($id);
        return view('teacher.edit', compact('teacher'));
    }


    public function update(Request $request, $id)
    {
        $data = $request->except('_method', '_token'); 
        
        $extension = $data['photo']->extension();
        $unique = date('ymd').time();
        $name = $unique.'.'.$extension;
        $data['photo'] = $name;
        $request->photo->move(public_path('/img/profile'), $name);

        $this->teacher->where('id', "$id")->update($data);
        return redirect('/teacher')->with('success', 'Teacher detail updated successfully.');
    }


    public function destroy(Request $request, $id)
    {
        $data = $request->except('_method', '_token');
        $this->teacher->where('id', "$id")->delete($data);
        return redirect('/teacher')->with('success', 'Teacher data deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function __construct(Faculty $faculty)
    {
        $this->faculty = $faculty;
    }

    public function index()
    {
        $data = $this->faculty->all();
        return view('faculty.index', compact('data'));
    }

    public function create()
    {
        return view('faculty.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->faculty->create($data);
        return redirect('/faculty')->with('success', 'Faculty created sucessfully.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $faculty = $this->faculty->findOrFail($id);
        return view('faculty.edit', compact('faculty'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_method', '_token'); 
        $this->faculty->where('id', "$id")->update($data);
        return redirect('/faculty')->with('success', 'Faculty updated sucessfully.');
    }

    public function destroy(Request $request, $id)
    {
        $data = $request->except('_method', '_token');
        $this->faculty->where('id', "$id")->delete($data);
        return redirect('/faculty')->with('success', 'Faculty deleted sucessfully.');
    }
}

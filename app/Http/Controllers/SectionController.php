<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function __construct(Section $section)
    {
        $this->section = $section;
    }

    public function index()
    {
        $data = $this->section->all();
        return view('section.index', compact('data'));
    }

    public function create()
    {
        return view('section.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->section->create($data);
        return redirect('/section')->with('success', 'Section created sucessfully.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $section = $this->section->findOrFail($id);
        return view('section.edit', compact('section'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_method', '_token'); 
        $this->section->where('id', "$id")->update($data);
        return redirect('/section')->with('success', 'Section updated sucessfully.');
    }

    public function destroy(Request $request, $id)
    {
        $data = $request->except('_method', '_token');
        $this->section->where('id', "$id")->delete($data);
        return redirect('/section')->with('success', 'Section deleted sucessfully.');
    }
}

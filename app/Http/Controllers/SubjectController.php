<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
    }
  
    public function index()
    {
        $data = $this->subject->all();
        return view('subject.index', compact('data'));
    }


    public function create()
    {
        return view('subject.create');
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $this->subject->create($data);
        return redirect('/subject')->with('success', 'Subject detail added successfully.');
    }


    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {
        $subject = $this->subject->findOrFail($id);
        return view('subject.edit', compact('subject'));
    }


    public function update(Request $request, $id)
    {
        $data = $request->except('_token', '_method');
        $this->subject->where('id', "$id")->update($data);
        return redirect('/subject')->with('success', 'Subject detail updated successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $data = $request->except('_method', '_token');
        $this->subject->where('id', "$id")->delete($data);
        return redirect('/teacher')->with('success', 'Subject data deleted successfully.');
    }
}

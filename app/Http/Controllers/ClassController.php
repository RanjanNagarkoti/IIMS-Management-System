<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassController extends Controller
{   
    public function __construct(Classes $classes)
    {
        $this->classes = $classes;
    }
    public function index(){
        $data = $this->classes->all();
        return view('class.index', compact('data'));
    }

    public function create(){
        return view('class.create');
    }

    public function store(Request $request){
        $data = $request->all();
        $this->classes->create($data);
        return redirect('/class')->with('success', 'Class created successfully.');
    }


    public function edit($id){
        $detail = $this->classes->findOrFail($id);
        return view('class.edit', compact('detail'));
    }

    public function update(Request $request, $id){
        $data = $request->except('_method', '_token'); 
        $this->classes->where('id', "$id")->update($data);
        return redirect('/class')->with('success', 'Class detail updated successfully.');
    }

    public function destroy(Request $request, $id){
        $data = $request->except('_method', '_token');
        $this->classes->where('id', "$id")->delete($data);
        return redirect('/class')->with('success', 'Class data deleted sucessfully.');
    }
}

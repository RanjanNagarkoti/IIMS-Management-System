@extends('layouts.master')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Student Detail</h1>
        <a href="/student" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-arrow-left"></i></a>
    </div>

    {{ Form::model($student, ['url' => "/student/$student->id", 'method' => 'PUT', 'enctype'=>"multipart/form-data"]) }}
        @include('student.form')
    {{ Form::close() }}
@endsection

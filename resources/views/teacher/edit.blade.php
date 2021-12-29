@extends('layouts.master')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Teacher Detail</h1>
        <a href="/teacher" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-arrow-left"></i></a>
    </div>

    {{ Form::model($teacher, ['url' => "/teacher/$teacher->id", 'method' => 'PUT', 'enctype' => 'multipart/form-data']) }}
    @include('teacher.form')
    {!! Form::submit('Submit', ['class'=>'btn btn-primary mb5']) !!}
    {{ Form::close() }}
@endsection

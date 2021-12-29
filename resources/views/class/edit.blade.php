@extends('layouts.master')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add New Class</h1>
        <a href="/class" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-arrow-left"></i></a>
    </div>

    {{ Form::model($detail, ['url' => "/class/$detail->id", 'method' => 'PUT']) }}
        @include('class.form')
    {{ Form::close() }}

@endsection

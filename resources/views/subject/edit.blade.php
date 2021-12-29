@extends('layouts.master')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Subject Detail</h1>
    <a href="/subject" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-arrow-left"></i></a>
</div>

<div class="container-fluid">
    {{ Form::model($subject, ['url' => "/subject/$subject->id", 'method' => 'PUT', 'enctype' => 'multipart/form-data']) }}
    @include('subject.form')
    {{ Form::close() }}
</div>
@endsection
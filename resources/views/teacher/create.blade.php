@extends('layouts.master')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add New Teacher</h1>
        <a href="/teacher" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-arrow-left"></i></a>
    </div>

    <form action="{{route('teacher.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('teacher.form')
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
@endsection

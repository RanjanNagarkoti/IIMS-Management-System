@extends('layouts.master')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Teacher List</h1>
        <a href="/teacher/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus"></i> Add New Teacher</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Designation</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th scope="col">Qualification</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $id = 1;
            @endphp
            @foreach ($data as $detail)
                <tr>
                    <th scope="row">{{ $id++ }}</th>
                    <td>{{ $detail['name'] }}</td>
                    <td>{{ $detail['designation'] }}</td>
                    <td>{{ $detail['email'] }}</td>
                    <td>{{ $detail['gender'] }}</td>
                    <td>{{ $detail['qualification'] }}</td>
                    <td>
                        @if ($detail['status'] == 0)
                            <h3 class="btn btn-info">Left</h3>
                        @elseif ($detail['status'] == 1)
                            <h3 class="btn btn-success">Active</h3>
                        @endif
                    </td>
                    <td>
                        <a href="/teacher/{{$detail['id']}}" class="btn btn-primary">View Profile</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

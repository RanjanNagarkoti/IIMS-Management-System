@extends('layouts.master')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Student List</h1>
        <a href="/student/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus"></i> Add New Student</a>
    </div>
    @include('includes.alert')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Univ ID</th>
                <th>Faculty</th>
                <th>Class</th>
                <th>Section</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th scope="col">Nationality</th>
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
                    <td>{{ $detail['id_card_num'] }}</td>
                    <td>{{ $detail->faculty->name}}</td>
                    <td>{{ $detail->Classes->name}}</td>
                    <td>{{ $detail->section->name}}</td>
                    <td>{{ $detail['email'] }}</td>
                    <td>{{ $detail['gender'] }}</td>
                    <td>{{ $detail['nationality'] }}</td>
                    <td>
                        @if ($detail['status'] == 0)
                            <h3 class="btn btn-info">Graduated</h3>
                        @elseif ($detail['status'] == 1)
                            <h3 class="btn btn-success">Active</h3>
                        @endif
                    </td>
                    <td>
                        <a href="/student/{{$detail['id']}}" class="btn btn-primary">View Profile</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@extends('layouts.master')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Class List</h1>
        <a href="/class/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus"></i> Add Data</a>
    </div>
    @include('includes.alert')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col" class="col-1">#</th>
                <th scope="col" class="col-1">Name</th>
                <th scope="col" class="col-5">Short Description</th>
                <th>Sections</th>
                <th>Students</th>
                <th>Subjects</th>
                <th scope="col" class="col-1">Status</th>
                <th scope="col" class="col-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $id = 1;
            @endphp
            @foreach ($data as $detail)
                <tr>
                    <th scope="row">{{ $id++ }}</th>
                    <td>{{ $detail->name }}</td>
                    <td>{{ $detail->short_description }}</td>
                    <td>{{$detail->section->count() ?? 'n/a'}}</td>
                    <td>{{$detail->student->count() ?? 'n/a'}}</td>
                    <td>{{$detail->subject->count() ?? 'n/a'}}</td>
                    <td>
                        @if ($detail['status'] == 0)
                            <h3 class="btn btn-danger">Inactive</h3>
                        @elseif ($detail['status'] == 1)
                            <h3 class="btn btn-success">Active</h3>
                        @endif
                    </td>
                    <td>
                        <a href="/class/{{ $detail['id'] }}/edit" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        <button data-id="{{$detail->id}}" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @include('includes.deleteModel')
    <script>
        $('#deleteModal').on('show.bs.modal', function(e) {
            let selectedButton = $(e.relatedTarget);
            let id = selectedButton.data('id');
            $(this).find('.delete-form').attr('action', '/class/' + id);
            console.log(id);
        });
    </script>
@endsection

@extends('layouts.master')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Subject List</h1>
        <a href="/subject/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus"></i> Add New Subject</a>
    </div>

    @include('includes.alert')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Code</th>
                <th scope="col">Type</th>
                <th scope="col">Class Id</th>
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
                    <td>{{ $detail['code'] }}</td>
                    <td>{{ $detail['type'] }}</td>
                    <td>{{ $detail['class_id'] }}</td>
                    <td>
                        @if ($detail['status'] == 0)    
                            <h3 class="btn btn-info">Graduated</h3>
                        @elseif ($detail['status'] == 1)
                            <h3 class="btn btn-success">Active</h3>
                        @endif
                    </td>
                    <td>
                        <a href="subject/{{$detail['id']}}/edit" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        <button data-id="{{ $detail->id }}" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
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
            $(this).find('.delete-form').attr('action', '/subject/' + id);
            console.log(id);
        });
    </script>
@endsection

@extends('layouts.master')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Teacher Profile</h1>
        <a href="/teacher" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-arrow-left"></i></a>
    </div>
    <div class="grid">
        <div>
            <div class="grid">
                <img src="/img/profile/{{ $data['photo'] }}" alt="Profile Pic" class="profile-img">
            </div>
            <div class="grid-second">
                <div>
                    <p>Name:</p>
                </div>
                <div>
                    <p>{{ $data['name'] }}</p>
                </div>

                <div>
                    <p>Teacher Id:</p>
                </div>
                <div>
                    <p>{{ $data['id_card'] }}</p>
                </div>

                <div>
                    <p>Date of Birth:</p>
                </div>
                <div>
                    <p>{{ $data['date_of_birth'] }}</p>
                </div>

                <div>
                    <p>Email:</p>
                </div>
                <div>
                    <p>{{ $data['email'] }}</p>
                </div>

                <div>
                    <p>Gender:</p>
                </div>
                <div>
                    <p>{{ $data['gender'] }}</p>
                </div>

                <div>
                    <p>Primary Contact:</p>
                </div>
                <div>
                    <p>{{ $data['primary_contact'] }}</p>
                </div>

                <div>
                    <p>Secondary Contact:</p>
                </div>
                <div>
                    <p>{{ $data['secondary_contact'] }}</p>
                </div>
            </div>
        </div>
        <div>
            <div class="grid-second">
                <div>
                    <p>Religion:</p>
                </div>
                <div>
                    <p>{{ $data['religion'] }}</p>
                </div>

                <div>
                    <p>Permanent Address:</p>
                </div>
                <div>
                    <p>{{ $data['permanent_address'] }}</p>
                </div>

                <div>
                    <p>Temporary Address:</p>
                </div>
                <div>
                    <p>{{ $data['temporary_address'] }}</p>
                </div>

                <div>
                    <p>Designation:</p>
                </div>
                <div>
                    <p>{{ $data['designation'] }}</p>
                </div>

                <div>
                    <p>Note:</p>
                </div>
                <div>
                    <p>{{ $data['note'] }}</p>
                </div>

                <div>
                    <p>Qualification:</p>
                </div>
                <div>
                    <p>{{ $data['qualification'] }}</p>
                </div>

                <div>
                    <p>Joined date:</p>
                </div>
                <div>
                    <p>{{ $data['joining_date'] }}</p>
                </div>

                <div>
                    <p>Leaving date:</p>
                </div>
                <div>
                    <p>{{ $data['leaving_date'] }}</p>
                </div>

                <div>
                    <p>Status:</p>
                </div>
                <div>
                    @if ($data['status'] == 0)
                        <h3 class="btn btn-info">Graduated</h3>
                    @elseif ($data['status'] == 1)
                        <h3 class="btn btn-success">Active</h3>
                    @endif
                </div>

            </div>
            <a href="/teacher/{{ $data['id'] }}/edit" class="btn btn-primary">Edit</a>
            <button data-id="{{ $data->id }}" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                <i class="fas fa-trash"></i>
            </button>
        </div>
    </div>
    @include('includes.deleteModel')
    <script>
        $('#deleteModal').on('show.bs.modal', function(e) {
            let selectedButton = $(e.relatedTarget);
            let id = selectedButton.data('id');
            $(this).find('.delete-form').attr('action', '/teacher/' + id);
            console.log(id);
        });
    </script>
@endsection

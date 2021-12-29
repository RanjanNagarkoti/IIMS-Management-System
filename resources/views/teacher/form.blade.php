<div class="row">
    <div class="col">
        <label for="name" class="col-form-label">Name</label>
        {{ Form::text('name', null, ['class' => 'form-control mb-3', 'id' => 'name']) }}
    </div>
    <div class="col">
        <label for="name" class="col-form-label">Email</label>
        {{ Form::email('email', null, ['class' => 'form-control', 'id' => 'email']) }}
    </div>
</div>

<div class="row">
    <div class="col">
        <label for="note" class="col-form-label">Note</label>
        {{ Form::text('note', null, ['class' => 'form-control mb-3', 'id' => 'note']) }}
    </div>
    <div class="col">
        <label for="designation" class="col-form-label">Designation</label>
        {{ Form::text('designation', null, ['class' => 'form-control', 'id' => 'designation']) }}
    </div>
</div>

<div class="row">
    <div class="col">
        <label for="qualification" class="col-form-label">Qualification</label>
        {{ Form::text('qualification', null, ['class' => 'form-control mb-3', 'id' => 'qualification']) }}
    </div>
    <div class="col">
        <label for="primary_contact" class="col-form-label">Primary Contact</label>
        {{ Form::text('primary_contact', null, ['class' => 'form-control mb-3', 'id' => 'primary_contact']) }}
    </div>
</div>

<div class="row">
    <div class="col">
        <label for="secondary_contact" class="col-form-label">Secondary Contact</label>
        {{ Form::text('secondary_contact', null, ['class' => 'form-control mb-3', 'id' => 'secondary_contact']) }}
    </div>
    <div class="col">
        <label for="date_of_birth" class="col-form-label">Date Of Birth</label>
        {{ Form::date('date_of_birth', null, ['class' => 'form-control mb-3', 'id' => 'date_of_birth']) }}
    </div>
</div>

<div class="row">
    <div class="col">
        <label for="gender" class="col-form-label">Gender</label>
        {{ Form::select('gender', ['female' => 'Female', 'male' => 'Male', 'others' => 'Others'], null, ['class' => 'form-control', 'id' => 'gender']) }}
    </div>
    <div class="col">
        <label for="religion" class="col-form-label">Religion</label>
        {{ Form::text('religion', null, ['class' => 'form-control mb-3', 'id' => 'religion']) }}
    </div>
</div>

<div class="row">
    <div class="col">
        <label for="permanent_address" class="col-form-label">Permanent Address</label>
        {{ Form::text('permanent_address', null, ['class' => 'form-control', 'id' => 'permanent_address']) }}
    </div>
    <div class="col">
        <label for="temporary_address" class="col-form-label">Temporary Address</label>
        {{ Form::text('temporary_address', null, ['class' => 'form-control', 'id' => 'temporary_address']) }}
    </div>
</div>

<div class="row">
    <div class="col">
        <label for="id_card" class="col-form-label">Id Card</label>
        {{ Form::text('id_card', null, ['class' => 'form-control mb-3', 'id' => 'id_card']) }}
    </div>
    <div class="col">
        <label for="joining_date" class="col-form-label">Joining date</label>
        {{ Form::date('joining_date', null, ['class' => 'form-control', 'id' => 'joining_date']) }}
    </div>
</div>

<div class="row">
    <div class="col">
        <label for="leaving_date" class="col-form-label">Leaving Date</label>
        {{ Form::date('leaving_date', null, ['class' => 'form-control mb-3', 'id' => 'leaving_date']) }}
    </div>
    <div class="col">
        <label for="status" class="col-form-label">Status</label>
        {{ Form::select('status', ['1' => 'Active', '0' => 'Inactive'], null, ['class' => 'form-control', 'id' => 'status']) }}
    </div>
</div>

<div class="row">
    <div class="col">
        <label for="photo" class="col-form-label">Auto Size Picture</label>
        <input class="form-control" type="file" id="photo" name="photo">
    </div>
</div>
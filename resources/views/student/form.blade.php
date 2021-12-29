<div class="row">
    <div class="col">
        <label for="name" class="col-form-label">Name</label>
        {{ Form::text('name', null, ['class' => 'form-control mb-3', 'id' => 'name']) }}
    </div>
    <div class="col">
        <label for="id_card_num" class="col-form-label">University Id</label>
        {{ Form::text('id_card_num', null, ['class' => 'form-control', 'id' => 'id_card_num']) }}
    </div>
</div>

<div class="row">
    <div class="col">
        <label for="date_of_birth" class="col-form-label">Date Of Birth</label>
        {{ Form::date('date_of_birth', null, ['class' => 'form-control mb-3', 'id' => 'date_of_birth']) }}
    </div>
    <div class="col">
        <label for="name" class="col-form-label">Email</label>
        {{ Form::email('email', null, ['class' => 'form-control', 'id' => 'email']) }}
    </div>
</div>

<div class="row">
    <div class="col">
        <label for="gender" class="col-form-label">Gender</label>
        {{ Form::select('gender', ['female' => 'Female', 'male' => 'Male', 'others' => 'Others'], null, ['class' => 'form-control', 'id' => 'gender']) }}
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
        <label for="nationality" class="col-form-label">Nationality</label>
        {{ Form::text('nationality', null, ['class' => 'form-control', 'id' => 'nationality']) }}
    </div>
</div>

<div class="row">
    <div class="col">
        <label for="permanent_address" class="col-form-label">Permanent Address</label>
        {{ Form::text('permanent_address', null, ['class' => 'form-control mb-3', 'id' => 'permanent_address']) }}
    </div>
    <div class="col">
        <label for="temporary_address" class="col-form-label">Temporary Address</label>
        {{ Form::text('temporary_address', null, ['class' => 'form-control', 'id' => 'temporary_address']) }}
    </div>
</div>

<div class="row">
    <div class="col">
        <label for="guardian_name" class="col-form-label">Guardian Name</label>
        {{ Form::text('guardian_name', null, ['class' => 'form-control mb-3', 'id' => 'guardian_name']) }}
    </div>
    <div class="col">
        <label for="guardian_contact" class="col-form-label">Guardian Contact</label>
        {{ Form::text('guardian_contact', null, ['class' => 'form-control', 'id' => 'guardian_contact']) }}
    </div>
</div>

<div class="row">
    <div class="col">
        <label for="guardian_relation" class="col-form-label">Guardian Relation</label>
        {{ Form::text('guardian_relation', null, ['class' => 'form-control mb-3', 'id' => 'guardian_relation']) }}
    </div>
    <div class="col">
        <label for="class_id" class="col-form-label">Class Id</label>
        {{ Form::text('class_id', null, ['class' => 'form-control', 'id' => 'class_id']) }}
    </div>
</div>

<div class="row">
    <div class="col">
        <label for="section_id" class="col-form-label">Section Id</label>
        {{ Form::text('section_id', null, ['class' => 'form-control mb-3', 'id' => 'section_id']) }}
    </div>
    <div class="col">
        <label for="faculty_id" class="col-form-label">Faculty Id</label>
        {{ Form::text('faculty_id', null, ['class' => 'form-control', 'id' => 'faculty_id']) }}
    </div>
</div>

<div class="row">
    <div class="col">
        <label for="status" class="col-form-label">Status</label>
        {{ Form::select('status', ['1' => 'Active', '0' => 'Inactive'], null, ['class' => 'form-control', 'id' => 'status']) }}
    </div>
    <div class="col">
        <label for="photo" class="col-form-label">Auto Size Picture</label>
        <input class="form-control" type="file" id="photo" name="photo">
    </div>
</div>

<button type="submit" class="btn btn-primary mt-3">Submit</button>

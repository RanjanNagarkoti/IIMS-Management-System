<div class="mb-3 row">
    <label for="name" class="col-md-2 col-form-label">Name</label>
    <div class="col-md-4">
        {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
    </div>
</div>

<div class="mb-3 row">
    <label for="code" class="col-md-2 col-form-label">Code</label>
    <div class="col-md-4">
        {{ Form::text('code', null, ['class' => 'form-control', 'id' => 'code']) }}
    </div>
</div>

<div class="mb-3 row">
    <label for="class_id" class="col-md-2 col-form-label">Class Id</label>
    <div class="col-md-4">
        {{ Form::text('class_id', null, ['class' => 'form-control', 'id' => 'class_id']) }}
    </div>
</div>

<div class="mb-3 row">
    <label for="type" class="col-md-2 col-form-label">type</label>
    <div class="col-md-4">
        {{ Form::select('type', ['core'=>'Core', 'elective'=>'Elective'], null, ['class' => 'form-control', 'id' => 'type']) }}
    </div>
</div>

<div class="mb-3 row">
    <label for="status" class="col-md-2 col-form-label">Status</label>
    <div class="col-md-4">
        {{ Form::select('status', ['1' => 'Active', '0' => 'Inactive'], null, ['class' => 'form-control', 'id' => 'status']) }}
    </div>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
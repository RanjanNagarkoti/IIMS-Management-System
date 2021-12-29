<div class="mb-3 row">
    <label for="name" class="col-md-2 col-form-label">Name</label>
    <div class="col-md-4">
        {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
    </div>
</div>

<div class="mb-3 row">
    <label for="short_description" class="col-md-2 col-form-label">Short Description</label>
    <div class="col-md-4">
        {{ Form::textarea('short_description', null, ['class' => 'form-control', 'id' => 'short_description', 'style=height:100px;']) }}
    </div>
</div>

<div class="mb-3 row">
    <label for="description" class="col-md-2 col-form-label">Description</label>
    <div class="col-md-4">
        {{ Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description']) }}
    </div>
</div>

<div class="mb-3 row">
    <label for="is_admission_open" class="col-md-2 col-form-label">Admission Open</label>
    <div class="col-md-4">
        {{ Form::select('is_admission_open', ['1' => 'Yes', '0' => 'No'], null, ['class' => 'form-control', 'id' => 'is_admission_open']) }}
    </div>
</div>

<div class="mb-3 row">
    <label for="status" class="col-md-2 col-form-label">Status</label>
    <div class="col-md-4">
        {{ Form::select('status', ['1' => 'Active', '0' => 'Inactive'], null, ['class' => 'form-control', 'id' => 'status']) }}
    </div>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
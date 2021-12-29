<div class="mb-3 row">
    <label for="name" class="col-md-2 col-form-label">Name</label>
    <div class="col-md-4">
        {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
    </div>
</div>

<div class="mb-3 row">
    <label for="capacity" class="col-md-2 col-form-label">Capacity</label>
    <div class="col-md-4">
        {{ Form::text('capacity', null, ['class' => 'form-control', 'id' => 'capacity']) }}
    </div>
</div>

<div class="mb-3 row">
    <label for="class_id" class="col-md-2 col-form-label">Class Id</label>
    <div class="col-md-4">
        {{ Form::text('class_id', null, ['class' => 'form-control', 'id' => 'class_id']) }}
    </div>
</div>

<div class="mb-3 row">
    <label for="note" class="col-md-2 col-form-label">Note</label>
    <div class="col-md-4">
        {{ Form::textarea('note', null, ['class' => 'form-control', 'id' => 'note', 'style=height:100px;']) }}
    </div>
</div>

<div class="mb-3 row">
    <label for="status" class="col-md-2 col-form-label">Status</label>
    <div class="col-md-4">
        {{ Form::select('status', ['1' => 'Active', '0' => 'Inactive'], null, ['class' => 'form-control', 'id' => 'status']) }}
    </div>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
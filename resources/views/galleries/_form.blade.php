<div class="form-group row">
	<div class="col-md-6">
		<label for="name">Name</label>
		{!! Form::text('name', null, ['class' => 'form-control input-sm']) !!}
		{!! errors_for('name', $errors) !!}
	</div>
	<div class="col-md-6">
		<label for="label_id">Label</label>
		{!! Form::select('label_id', $labels, Input::old('label_id'), ['class' => 'form-control', 'id' => 'label_id']) !!}
		{!! errors_for('label_id', $errors) !!}
	</div>
</div>

<div class="form-group row">
	<div class="col-md-6">
		<label for="image">Image<small> - jpg/png/gif max size 200kb</small></label>
		<input type="file" class="form-control input-sm" name="image">
	</div>
</div>

<div class="form-group row">
	<div class="col-md-12 {!! $errors->has('description') ? 'has-error' : '' !!}">
		<label for="description">Description</label>
		{!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description']) !!}
		{!! errors_for('description', $errors) !!}
	</div>
</div>

<div class="form-group row">
	<div class="col-md-12">
		<button class="btn btn-sm btn-info">Submit</button>
	</div>
</div>
<div class="form-group row">
	<div class="col-md-6">
		<label for="name">Name</label>
		{!! Form::text('name', null, ['class' => 'form-control input-sm']) !!}
		{!! errors_for('name', $errors) !!}
	</div>
	<div class="col-md-6">
		<label for="name">Url</label>
		{!! Form::text('url', null, ['class' => 'form-control input-sm']) !!}
		{!! errors_for('url', $errors) !!}
	</div>
</div>

<div class="form-group row">
	<div class="col-md-12">
		<button class="btn btn-sm btn-info">Submit</button>
	</div>
</div>
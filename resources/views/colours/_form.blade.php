<div class="form-group row">
	<div class="col-md-12">
		<button class="btn btn-lg btn-success" style="float: right;"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Submit</button>
	</div>
</div>

<div class="form-group row">
	<div class="col-md-6 {{ $errors->has('hex') ? 'has-error' : '' }}">
		<label for="hex">Colour</label>
		{!! Form::text('hex', null, ['class' => 'pick-a-color form-control']) !!}
		{!! errors_for('hex', $errors) !!}
	</div>
	<div class="col-md-6 {{ $errors->has('name') ? 'has-error' : '' }}">
		<label for="name">Name</label>
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
		{!! errors_for('name', $errors) !!}
	</div>
</div>
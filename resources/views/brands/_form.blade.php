<div class="form-group row">
	<div class="col-md-6 {!! $errors->has('name') ? 'has-error' : '' !!}">
		<label for="name">Name</label>
		{!! Form::text('name', null, ['class' => 'form-control input-sm', 'id' => 'name']) !!}
		{!! errors_for('name', $errors) !!}
	</div>
	<div class="col-md-6 {!! $errors->has('logo') ? 'has-error' : '' !!}">
		<label for="logo">Logo<small> - jpg/png/gif max size 200kb</small></label>
		<input type="file" class="form-control input-sm" name="logo">
	</div>
</div>

<div class="form-group row">
	<div class="col-md-6 {!! $errors->has('website') ? 'has-error' : '' !!}">
		<label for="website">Website Url</label>
		{!! Form::text('website', null, ['class' => 'form-control input-sm', 'id' => 'website']) !!}
		{!! errors_for('website', $errors) !!}
	</div>
	<div class="col-md-6 {!! $errors->has('email') ? 'has-error' : '' !!}">
		<label for="email">Email Address</label>
		{!! Form::text('email', null, ['class' => 'form-control input-sm', 'id' => 'email']) !!}
		{!! errors_for('email', $errors) !!}
	</div>
</div>

<div class="form-group row">
	<div class="col-md-6 {!! $errors->has('phone') ? 'has-error' : '' !!}">
		<label for="phone">Phone Number</label>
		{!! Form::text('phone', null, ['class' => 'form-control input-sm', 'id' => 'phone']) !!}
		{!! errors_for('phone', $errors) !!}
	</div>
	<div class="col-md-6 {!! $errors->has('fax') ? 'has-error' : '' !!}">
		<label for="fax">Fax Number</label>
		{!! Form::text('fax', null, ['class' => 'form-control input-sm', 'id' => 'fax']) !!}
		{!! errors_for('fax', $errors) !!}
	</div>
</div>

<div class="form-group row">
	<div class="col-md-12 {!! $errors->has('address') ? 'has-error' : '' !!}">
		<label for="address">Address</label>
		{!! Form::text('address', null, ['class' => 'form-control input-sm', 'id' => 'address']) !!}
		{!! errors_for('address', $errors) !!}
	</div>
</div>

<div class="form-group row">
	<div class="col-md-12 {!! $errors->has('about') ? 'has-error' : '' !!}">
		<label for="about">Bio</label>
		{!! Form::textarea('about', null, ['class' => 'form-control', 'id' => 'about']) !!}
		{!! errors_for('about', $errors) !!}
	</div>
</div>

<div class="form-group row">
	<div class="col-md-12">
		<button class="btn btn-sm btn-info">Submit</button>
	</div>
</div>
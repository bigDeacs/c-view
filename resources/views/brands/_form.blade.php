<div class="form-group row">
	<div class="col-md-12">
		<button class="btn btn-lg btn-success" style="float: right;"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Submit</button>
	</div>
</div>

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
	<div class="col-md-6 {{ $errors->has('color1') ? 'has-error' : '' }}">
		<label for="color1">Colour 1<small> - Highlight Colour</small></label>
		{!! Form::text('color1', null, ['class' => 'pick-a-color form-control']) !!}
		{!! errors_for('color1', $errors) !!}
		<label for="color2">Colour 2<small> - Light Colour</small></label>
		{!! Form::text('color2', null, ['class' => 'pick-a-color form-control']) !!}
		{!! errors_for('color2', $errors) !!}
	</div>
	<div class="col-md-6">
		<label for="color3">Colour 3<small> - Dark Colour</small></label>
		{!! Form::text('color3', null, ['class' => 'pick-a-color form-control']) !!}
		{!! errors_for('color3', $errors) !!}
		<label for="color4">Colour 4<small> - Darkest Colour</small></label>
		{!! Form::text('color4', null, ['class' => 'pick-a-color form-control']) !!}
		{!! errors_for('color4', $errors) !!}
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
		{!! Form::textarea('about', null, ['class' => 'form-control', 'id' => 'about', 'rows' => 5]) !!}
		{!! errors_for('about', $errors) !!}
	</div>
</div>

<div class="form-group row">
	<div class="col-md-3 {!! $errors->has('facebook') ? 'has-error' : '' !!}">
		<label for="facebook">Facebook</label>
		{!! Form::text('facebook', null, ['class' => 'form-control input-sm', 'id' => 'facebook']) !!}
		{!! errors_for('facebook', $errors) !!}
	</div>
	<div class="col-md-3 {!! $errors->has('twitter') ? 'has-error' : '' !!}">
		<label for="twitter">Twitter</label>
		{!! Form::text('twitter', null, ['class' => 'form-control input-sm', 'id' => 'twitter']) !!}
		{!! errors_for('twitter', $errors) !!}
	</div>
	<div class="col-md-3 {!! $errors->has('google') ? 'has-error' : '' !!}">
		<label for="google">Google+</label>
		{!! Form::text('google', null, ['class' => 'form-control input-sm', 'id' => 'google']) !!}
		{!! errors_for('google', $errors) !!}
	</div>
	<div class="col-md-3 {!! $errors->has('instagram') ? 'has-error' : '' !!}">
		<label for="instagram">Instagram</label>
		{!! Form::text('instagram', null, ['class' => 'form-control input-sm', 'id' => 'instagram']) !!}
		{!! errors_for('instagram', $errors) !!}
	</div>
</div>
<div class="form-group row">
	<div class="col-md-3 {!! $errors->has('vimeo') ? 'has-error' : '' !!}">
		<label for="vimeo">Vimeo</label>
		{!! Form::text('vimeo', null, ['class' => 'form-control input-sm', 'id' => 'vimeo']) !!}
		{!! errors_for('vimeo', $errors) !!}
	</div>
	<div class="col-md-3 {!! $errors->has('yellow') ? 'has-error' : '' !!}">
		<label for="yellow">Yellow Pages</label>
		{!! Form::text('yellow', null, ['class' => 'form-control input-sm', 'id' => 'yellow']) !!}
		{!! errors_for('yellow', $errors) !!}
	</div>
	<div class="col-md-3 {!! $errors->has('pinterest') ? 'has-error' : '' !!}">
		<label for="pinterest">Pinterest</label>
		{!! Form::text('pinterest', null, ['class' => 'form-control input-sm', 'id' => 'pinterest']) !!}
		{!! errors_for('pinterest', $errors) !!}
	</div>
	<div class="col-md-3 {!! $errors->has('houzz') ? 'has-error' : '' !!}">
		<label for="houzz">Houzz</label>
		{!! Form::text('houzz', null, ['class' => 'form-control input-sm', 'id' => 'houzz']) !!}
		{!! errors_for('houzz', $errors) !!}
	</div>
</div>
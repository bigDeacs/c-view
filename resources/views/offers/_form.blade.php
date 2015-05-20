<div class="form-group row">
	<div class="col-md-12 {!! $errors->has('promo') ? 'has-error' : '' !!}">
		<label for="promo">Promo</label>
		{!! Form::text('promo', null, ['class' => 'form-control input-sm']) !!}
		{!! errors_for('promo', $errors) !!}
	</div>
</div>

<div class="form-group row">
	<div class="col-md-6 {!! $errors->has('file') ? 'has-error' : '' !!}">
		<label for="image">Thumbnail<small> - jpg/png/gif max size 200kb</small></label>
		<input type="file" class="form-control input-sm" name="image">
		{!! errors_for('file', $errors) !!}
	</div>
	<div class="col-md-6 {!! $errors->has('product_id') ? 'has-error' : '' !!}">
		<label for="product_id">Product</label>
		{!! Form::select('product_id', $products, Input::old('product_id'), ['class' => 'form-control', 'id' => 'product_id']) !!}
		{!! errors_for('product_id', $errors) !!}
	</div>
</div>

<div class="form-group row">
	<div class="col-md-12">
		<button class="btn btn-sm btn-info">Submit</button>
	</div>
</div>
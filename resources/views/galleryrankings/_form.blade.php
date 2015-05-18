<div class="form-group row">
	@if(isset($rankings))
		@foreach($rankings as $ranking)
			<div class="col-md-3">
				<label for="{!! $ranking['rank'] !!}">{!! $ranking['rank'] !!}:</label>
				{!! Form::select('rankable_id[]', $images, $ranking['rankable_id'], ['class' => 'form-control', 'id' => $ranking['rank']]) !!}
			</div>
		@endforeach
	@else
		<div class="col-md-3">
			<label for="1">1:</label>
			{!! Form::select('rankable_id[]', $images, Input::old('image'), ['class' => 'form-control', 'id' => '1']) !!}
		</div>
		<div class="col-md-3">
			<label for="2">2:</label>
			{!! Form::select('rankable_id[]', $images, Input::old('image'), ['class' => 'form-control', 'id' => '2']) !!}
		</div>
		<div class="col-md-3">
			<label for="3">3:</label>
			{!! Form::select('rankable_id[]', $images, Input::old('image'), ['class' => 'form-control', 'id' => '3']) !!}
		</div>
		<div class="col-md-3">
			<label for="4">4:</label>
			{!! Form::select('rankable_id[]', $images, Input::old('image'), ['class' => 'form-control', 'id' => '4']) !!}
		</div>
	@endif
</div>

{!! Form::hidden('rankable_type', 'App\Image') !!}

<div class="form-group row">
	<div class="col-md-12">
		{!! Form::submit('Submit', ['class' => 'btn btn-primary btn-block']) !!}
	</div>
</div>
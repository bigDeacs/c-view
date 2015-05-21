<div class="form-group row">
	<div class="col-md-12">
		<button class="btn btn-lg btn-success" style="float: right;"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Submit</button>
	</div>
</div>

<div class="form-group row">
	@if(isset($rankings))
		@foreach($rankings as $ranking)
			<div class="col-md-3">
				<label for="{!! $ranking['rank'] !!}">{!! $ranking['rank'] !!}:</label>
				{!! Form::select('rankable_id[]', $brochures, $ranking['rankable_id'], ['class' => 'form-control', 'id' => $ranking['rank']]) !!}
			</div>
		@endforeach
	@else
		<div class="col-md-3">
			<label for="1">1:</label>
			{!! Form::select('rankable_id[]', $brochures, Input::old('image'), ['class' => 'form-control', 'id' => '1']) !!}
		</div>
		<div class="col-md-3">
			<label for="2">2:</label>
			{!! Form::select('rankable_id[]', $brochures, Input::old('image'), ['class' => 'form-control', 'id' => '2']) !!}
		</div>
		<div class="col-md-3">
			<label for="3">3:</label>
			{!! Form::select('rankable_id[]', $brochures, Input::old('image'), ['class' => 'form-control', 'id' => '3']) !!}
		</div>
		<div class="col-md-3">
			<label for="4">4:</label>
			{!! Form::select('rankable_id[]', $brochures, Input::old('image'), ['class' => 'form-control', 'id' => '4']) !!}
		</div>
	@endif
</div>

{!! Form::hidden('rankable_type', 'App\Brochure') !!}

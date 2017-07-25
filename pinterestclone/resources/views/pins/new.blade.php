@extends('layouts/master')

@section('content')
	
	<img class="img-responsive col-md-4" alt="image-preview" id="preview" src>

	<form action="/pins/store" method="post" class="col-md-6">
		{{ csrf_field() }}
		<div class="form-group">
	
		    <label for="url">pin url:</label>
		    <input type="text" class="form-control" id="url" name="url">
	
		</div>

		<div class="form-group">
	
		    <label for="title">pin title:</label>
		    <input type="text" class="form-control" id="title" name="title">
	
		</div>
		<div class="form-group" style="margin-bottom:6em;">
			<button type="submit" class="btn btn-success pull-right">publish</button>
		</div>
		
		<div class="form-group">
			@include('/layouts/errors')
		</div>
	</form>
	
@endsection
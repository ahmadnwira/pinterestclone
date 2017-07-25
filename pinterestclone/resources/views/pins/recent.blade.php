@extends('layouts/master')

@section('content')
	@foreach($pins as $pin)
	<div class="col-md-4">

	    <div class="thumbnail">
	        <img src="{{ $pin->url }}" alt="title" class="img-responsive">
	        
	    	<div class="caption">
	        	<p class="text-center">{{ $pin->title }}</p>
	          	<p>
		          	<span class="glyphicon glyphicon-heart"> {{ $pin->likes }} </span> 
		          	| <span class="glyphicon glyphicon-share"> {{ $pin->shares }}</span>
	          	</p>
	   		</div>
	    </div>
	</div>
	@endforeach
@endsection
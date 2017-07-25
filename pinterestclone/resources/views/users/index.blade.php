@extends('layouts/master')

@section('content')
<div class="page-header">
	<h1>Wellcome {{ ucwords(Auth::user()->name)  }} </h1>
</div>

<div class="container">

	<div class="col-md-4">
		<div class="thumbnail"  style="text-align:center;">
			<a href="/pins/new" class="btn btn-primary"> Add </a>
			<p>Add New Pin</p>
		</div>	
	</div>
	
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
	          	<p class="text-right">
	          		<a href="/pins/{{ $pin->id }}/delete"><span class="glyphicon glyphicon-remove"></span></a>
	          	</p>
	   		</div>
	    </div>
	</div>
	@endforeach

	
</div>
@endsection
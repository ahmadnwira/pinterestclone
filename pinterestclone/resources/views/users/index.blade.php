@extends('layouts/master')

@section('content')
<div class="page-header">
	<h1>Wellcome {{ ucwords(Auth::user()->name)  }} </h1>
</div>

<div class="container-fluid">
	
	<div class="col-md-10">
		<div class="col-md-3">
			<div class="thumbnail"  style="text-align:center;">
				<a href="/pins/new" class="btn btn-primary"> Add </a>
				<p>Add New Pin</p>
			</div>	
		</div>
		
		@foreach($pins as $pin)
		<div class="col-md-3">

		    <div class="thumbnail">
		        <img src="{{ $pin->url }}" alt="title" class="img-responsive">
		        
		    	<div class="caption">
		        	<p class="text-center">{{ $pin->title }}</p>
					
					@include('layouts/actions')
		          	
		          	<p class="text-right">
		          		<a href="/pins/{{ $pin->id }}/delete"><span class="glyphicon glyphicon-remove"></span></a>
		          	</p>
		   		</div>
		    </div>
		</div>
		@endforeach
	</div>

	<div class="col-md-2 side">
		<h3>Actions</h3>
		<hr>
		<ul>
			@foreach($actions as $action)
				<li><a href="pin/{{ $action->pin_id }}">{{ $action->action }}</a></li>
			@endforeach
		</ul>
	</div>
</div>
@endsection
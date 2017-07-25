
@if(count($errors->all()))

	<div class="alert alert-warning" id="alert">
	  <strong>Error!</strong>
	  @foreach($errors->all() as $error) 
		<li>{{ $error }}</li>
	  @endforeach
	</div>
@endif
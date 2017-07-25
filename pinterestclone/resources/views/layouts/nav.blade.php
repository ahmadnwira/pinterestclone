<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Home</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/pins/recent">recent pins</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
    
	  	@if(Auth::check())
			
			<li><a href="/yourboard">{{ ucwords(Auth::user()->name) }}</a></li>

			<li>
				<form action="/logout" method="post">
					{{ csrf_field()	 }}
					<button class="btn btn-link  navbar-btn">
						<span class="glyphicon glyphicon-log-out"></span> logout
					</button>
	  			</form>
	  		</li>
	  	@else
	  		<li><a href="/login">login</a></li>
	  	@endif
		
    </ul>

  </div>
</nav>
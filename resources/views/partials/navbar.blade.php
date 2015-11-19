<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">Case DAy</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li class="active"><a href="/mention">Cases</a></li>
			<li><a href="/blog">Blog</a></li>
			<li><a href="/about">About</a></li>
			<li><a href="/contact">Contact</a></li>
		</ul>
		<form class="navbar-form navbar-left" role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#">Find a lawyer</a></li>
			@if(!Auth::check())
				<li class="dropdown">			
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">User <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="/auth/login">Login</a></li>
						<li><a href="/auth/register">Register</a></li>
						<li><a href="/subscribe">Subscribe</a></li>
					</ul>
				</li>
			@else
				<li class="dropdown">			
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}} <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="/auth/logout">logout</a></li>
						<li><a href="/subscribe">Subscribe</a></li>
					</ul>
				</li>
			@endif
		</ul>
	</div><!-- /.navbar-collapse -->
</nav>
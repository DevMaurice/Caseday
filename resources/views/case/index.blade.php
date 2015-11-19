@extends('app')
@section('content')	
<div class="container">
	<div class="row">
		<div class="panel panel-default">
			  <div class="panel-heading clearfix">
					<h3 class="panel-title pull-left" style="padding-top: 7.5px;">Cases:</h3>
					<div class="form-group pull-right">
						<div class="col-lg-12" >
							<input type="search" name="" id="input" class="form-control" value="" required="required" title="">
						</div>
					</div>
			  </div>
			  <div class="panel-body">		
				  <div class="table-responsive">
				  	<table class="table table-hover">
				  		<thead>
				  			<tr>
				  				<th>Case No.</th>
				  				<th>Case Desc</th>
				  				<th>Date</th>
				  				<th>Court</th>
				  				<th>Room</th>
				  			</tr>
				  		</thead>
				  		<tbody>
				  			@foreach ($cases as $case)
				  			<a href="/case/".$case->id.">		  				
				  			<tr>
				  				<td>{{$case->case_no}}</td>
				  				<td>{{$case->desc}}</td>
				  				<td>{{$case->pivot->court_date}}</td>
				  				<td>{{$case->pivot->court->name}}</td>
				  				<td>{{$case->pivot->room->name}}</td>
				  			</tr>
				  			</a>
				  			@endforeach
				  		</tbody>
				  	</table>
				  </div>
			  </div>
		</div>
	</div>
</div>
@endsection
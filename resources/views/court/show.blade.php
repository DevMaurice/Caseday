@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
			<div class="panel panel-default">
				  <div class="panel-heading">
						<h3 class="panel-title">Add Court</h3>
				  </div>
				  <div class="panel-body">					
					{!! Form::model($court, ['class' => 'form-horizontal']) !!}							
							<div class="form-group @if($errors->first('name')) has-error @endif">
							    {!! Form::label('name', 'Name') !!}
							    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
							    <small class="text-danger">{{ $errors->first('name') }}</small>
							</div>	
							<div class="form-group @if($errors->first('location')) has-error @endif">
								{!! Form::label('location', 'Location') !!}
								{!! Form::text('location', null, ['class' => 'form-control', 'required' => 'required']) !!}
								<small class="text-danger">{{ $errors->first('location') }}</small>
							</div>	  
					{!! Form::close() !!}
					
				 		 </div>
				</div>
		</div>
	</div>
</div>
@endsection	




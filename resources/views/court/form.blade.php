  	@if(isset($court))				
		{!! Form::model($court, 
							['route' => ['court.update', $court->id], 
							'method' => 'PATCH', 
							'class' => 'form-horizontal']) 
							!!}
	<?php $btnVal='Update' ?>
	@else										
	{!! Form::open(['method' => 'POST', 'route' => 'court.store', 'class' => 'form-horizontal']) !!}
	<?php $btnVal='Create' ?>
	@endif
		<div class="col-sm-10">
		<label style="font-size:20px">{{ $btnVal }} Court</label>
		
		</div>
		
		<div class="form-group  @if($errors->first('name')) has-error @endif">
			{!! Form::label('name', 'Name',['class' => 'col-sm-3 control-label']) !!}
			<div class="col-sm-6">
			{!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}			
			<small class="text-danger">{{ $errors->first('name') }}</small>
			</div>
		</div>	
		<div class="form-group  @if($errors->first('location')) has-error @endif">
			{!! Form::label('location', 'Location',['class' => 'col-sm-3 control-label']) !!}
			<div class="col-sm-6">
			{!! Form::text('location', null, ['class' => 'form-control', 'required' => 'required']) !!}
			<small class="text-danger">{{ $errors->first('location') }}</small>
			</div>
		</div>	    
		<div class="col-sm-6 col-sm-offset-3">
			 {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
			{!! Form::submit($btnVal, ['class' => 'btn btn-success']) !!}
		</div>

	{!! Form::close() !!}

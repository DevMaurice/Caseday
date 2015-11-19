@extends('partials.table')
@section('table')
<thead>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Location</th>	
		<th>Action</th>
	</tr>
				  		</thead>
				  		<tbody>
				  			@foreach ($courts as $court)		  					  				
				  			<tr>
				  				<td>{{$court->id}}</td>
				  				<td>{{$court->name}}</td>
				  				<td>{{$court->location}}</td>
				  				<td><div class="btn-group">

				  					<a class="btn btn-primary" 
				  					href="/court/{{$court->id}}" 
				  					role="button">
				  					<i class="fa fa-eye"></i> View
				  					</a>

				  					<a class="btn btn-success" 
				  					href="/court/{{$court->id}}/edit" 
				  					role="button">
				  					<i class="fa fa-pencil-square-o"></i> Edit
				  					</a>

				  					<a class="btn btn-danger delete-button" 
				  					data-delete-link="{{ route('court.destroy', $court->id) }}" 
				  					role="button" 
				  					data-toggle="modal" 
				  					data-target="#modal-delete">
				  					<i class="fa fa-trash-o"></i> Delete
				  					</a>
				  				</div></td>
				  			</tr>												  			
				  			
				  			@endforeach
				  		</tbody>
@endsection
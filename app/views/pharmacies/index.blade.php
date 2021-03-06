@extends('master')

@section('c')

	<div class="row">
		<h1>Pharmacies</h1>
		
		<div class="col-md-8">
				

			<table class="table table-bordered">
				
				<thead>
					
					<tr>
						
						<th>Pharmacy</th>
						<th>Name</th>
						<th>Prefix</th>
						<th>Action</th>

					</tr>

				</thead>


				<tbody>
					
					@foreach (User::with('pharm')->where('type', 'pharm')->get() as $row)
						
						<tr>
							
							<td>{{ $row->pharm->name }}</td>
							<td>{{ $row->fullname() }}</td>
							<td>{{ $row->prefix }}</td>
							<td>
								
								<a class="btn btn-info btn-sm" href="{{ route('doctors.edit', $row->id) }}"> Edit </a>
								<a class="btn btn-danger btn-sm" href="{{ url('main/delete-user/'.$row->id) }}"> Remove </a>

							</td>

						</tr>


					@endforeach

				</tbody>

			</table>

		</div>

		<div class="col-md-4">
			
			@include('pharmacies.create')

		</div>


	</div>
	
@stop
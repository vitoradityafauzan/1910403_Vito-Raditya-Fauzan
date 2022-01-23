@extends('layout.admin-master')

<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">NIM</th>
					<th scope="col">Nama</th>
					<th scope="col">Gender</th>
					<th scope="col">Department</th>
					<th scope="col">Address</th>
					<th scope="col">created_at</th>
					<th scope="col">updated_at</th>
					<th scope="col">CHANGES</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($student as $s)
					<tr>
						<th scope="row">{{$s->id}}</th>
						<td>{{$s->nim}}</td>
						<td>{{$s->name}}</td>
						<td>{{$s->gender}}</td>
						<td>{{$s->department}}</td>
						<td>{{$s->address}}</td>
						<td>{{$s->created_at}}</td>
						<td>{{$s->updated_at}}</td>
						<td><a href="{{ url('/student/'.$s->id.'/edit') }}" class="btn btn-secondary">Update</a>   
						<form action="{{ url('/student/'.$s->id.'/delete') }}"  method="post">
							@method('delete')
							@csrf
							<button type="submit" class="btn btn-danger">Delete</button>
						</form>
					</tr></td>
				@endforeach
			</tbody>
		</table>
		<a href="{{route('studentCreate')}}" class="btn btn-primary">add Data</a>
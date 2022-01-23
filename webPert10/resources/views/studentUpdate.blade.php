@extends('layout.admin-master')
<form action="/student/{{$student->id}}/edit" method="post">
			@method('put')
			@csrf
			<div class="form-group">
			   <label for="nim">NIM</label>
			   <input type="text" class="form-control" name="nim" id="nim" placeholder="Enter NIM" value="{{$student->nim}}" required>
			</div>
			<div class="form-group">
			   <label for="nama">Nama</label>
			   <input type="text" class="form-control" name="nama" id="nama" placeholder="Enter Name" value="{{$student->name}}" required>
			</div>
			<div class="form-group">
			   <label for="gender">Gender</label>
			   <select class="form-control" name="gender" id="" required>
			   		<option value="{{$student->gender}}" selected>{{$student->gender}}</option>
			      	<option disabled>===========</option>
			      	<option value="#" disabled>Pilih</option>
			      	@foreach ($gender as $g)
	 					<option value="{{$g}}">
	 					{{$g}}
	 					</option>
			      	@endforeach
			    </select>
			</div>
			<div class="form-group">
			   <label for="dept">Departemen</label>
			   <select class="form-control" name="dept" id="">			      
			      <option value="{{$student->department}}" selected>{{$student->department}}</option>
			      <option disabled>===========</option>
			      <option value="#" disabled>Pilih</option>
			      @foreach ($dept as $d)
	 				<option value="{{$d}}">
	 					{{$d}}
	 				</option>
			      @endforeach
			    </select>
			</div>
			<div class="form-group">
			   <label for="addr">Alamat</label>
			   <input type="text" class="form-control" name="addr" id="addr" placeholder="Enter Alamat" value="{{$student->address}}">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
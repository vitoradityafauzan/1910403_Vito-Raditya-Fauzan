@extends('layout.admin-master')
@include('layout.partials.navbar')
@section('content')
<form action="/student/create" method="post">
			@csrf
			<div class="form-group">
			   <label for="nim">NIM</label>
			   <input type="text" class="form-control" name="nim" id="nim" placeholder="Enter NIM" required>
			</div>
			<div class="form-group">
			   <label for="nama">Nama</label>
			   <input type="text" class="form-control" name="nama" id="nama" placeholder="Enter Name" required>
			</div>
			<div class="form-group">
			   <label for="gender">Gender</label>
			   <select class="form-control" name="gender" id="" required>
			      <option value="#" selected>Pilih</option>
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
			      <option value="#" selected>Pilih</option>
			      @foreach ($dept as $d)
	 				<option value="{{$d}}">
	 					{{$d}}
	 				</option>
			      @endforeach
			    </select>
			</div>
			<div class="form-group">
			   <label for="addr">Alamat</label>
			   <input type="text" class="form-control" name="addr" id="addr" placeholder="Enter Alamat">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		@endsection
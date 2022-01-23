<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>Add Student</title>
</head>
<body>
	<div class="container">
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
		<br><br>
		<a href="/student" class="btn btn-primary">Go Back</a>
	</div>
</body>
</html>
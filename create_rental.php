<!doctype html>
<html lang="en">

<head>
	<title>Tambah Data Rental</title>
</head>

<body>

<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1>Tambah</h1>
	<a class="btn btn-sm btn-info" href="rental.php">Kembali</a>
	<br><br>
	<form action="controller.php" method="post">
		<label>ID Rental</label>
		<br>
		<input class="form-control" type="number" name="rental_id">
		<br>
		<label>ID mobil</label>
		<br>
		<input class="form-control" type="number" name="mobil_id"><br>
		<br>
		<label>ID member</label>
		<br>
		<input class="form-control" type="number" name="member_id">
		<br>
		<label>Lama Rental</label>
		<input class="form-control" type="text" name="lamarental">
		<br>
		<br>
		
		<button class="btn btn btn-danger" type="reset">Reset</button>
		<button class="btn btn btn-success" type="submit" name="submit_rental">Submit</button>
		
	</form>
</body>
</html>
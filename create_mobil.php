<!doctype html>
<html lang="en">

<head>
	<title>Tambah Data Mobil</title>
</head>

<body>

<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1>Tambah</h1>
	<a class="btn btn-sm btn-info" href="mobil.php">Kembali</a>
	<br><br>
	<form action="controller.php" method="post">
		<label>ID Mobil</label>
		<br>
		<input class="form-control" type="number" name="mobil_id">
		<br>
		<label>Merk</label>
		<br>
		<input class="form-control" type="text" name="merktipe"><br>
		<br>
		<label>Tahun Keluaran</label>
		<br>
		<input class="form-control" type="number" name="thnkeluaran">
		<br>
		<label>Tarif</label>
		<input class="form-control" type="number" name="tarif">
		<br>
		<br>
		
		<button class="btn btn btn-danger" type="reset">Reset</button>
		<button class="btn btn btn-success" type="submit" name="submit_mobil">Submit</button>
		
	</form>
</body>
</html>
<!doctype html>
<html lang="en">

<head>
	<title>Tambah Data Member</title>
</head>

<body>

<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1>Tambah</h1>
	<a class="btn btn-sm btn-info" href="member.php">Kembali</a>
	<br><br>
	<form action="controller.php" method="post">
		<label>ID Member</label>
		<br>
		<input class="form-control" type="text" name="member_id">
		<br>
		<label>Nama</label>
		<br>
		<input class="form-control" type="text" name="nama">
		<br>
		<label>Alamat</label>
		<br>
		<input class="form-control" type="text" name="alamat">
		<br>
		<label>Telepon</label>
		<input class="form-control" type="number" name="tlp">
		<br>
		<br>
		
		<button class="btn btn btn-danger" type="reset">Reset</button>
		<button class="btn btn btn-success" type="submit" name="submit_member">Submit</button>
		
	</form>
</body>
</html>
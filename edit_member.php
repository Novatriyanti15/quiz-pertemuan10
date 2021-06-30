<?php
$member_id = $_GET['member_id'];
include 'model.php';
$model = new Model();
$data = $model->edit_member($member_id);
?>
<!doctype html>
<html lang="en">

<head>
	<title>Edit Member</title>
</head>

<body>
	
	<div class="container">
  	<div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1>Edit Member</h1>
	<a class="btn btn-sm btn-info" href="member.php">Kembali</a>
	<br><br>
	<form action="controller.php" method="post">

		<label>ID Member</label>
		<br>
		<input class="form-control" type="text" name="member_id" value="<?php echo $data->member_id ?>">
		<br>
		<label>Nama</label>
		<br>
		<input class="form-control" type="text" name="nama" value="<?php echo $data->nama ?>">
		<br>
		<label>Alamat</label>
		<br>
		<input class="form-control" type="text" name="alamat" value="<?php echo $data->alamat ?>">
		<br>
		<label>Telpon</label>
		<input class="form-control" type="number" name="tlp" value="<?php echo $data->tlp?>">
		<br><br>
		<button class="btn btn btn-success" type="submit" name="submit_edit_member">Submit</button> 
	</form>
</body>
</html>
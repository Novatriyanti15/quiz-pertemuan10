<?php
$rental_id = $_GET['rental_id'];
include 'model.php';
$model = new Model();
$data = $model->edit_rental($rental_id);
?>
<!doctype html>
<html lang="en">

<head>
	<title>Edit Rental</title>
</head>

<body>
	
	<div class="container">
  	<div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1>Edit Rental</h1>
	<a class="btn btn-sm btn-info" href="rental.php">Kembali</a>
	<br><br>
	<form action="controller.php" method="post">

					<th>ID Rental</th>
					<th>ID Mobil</th>
					<th>ID member</th>
					<th>Lama Rental</th>
					<th>Aksi</th>

		<label>ID Rental</label>
		<br>
		<input class="form-control" type="number" name="rental_id" value="<?php echo $data->rental_id ?>">
		<br>
		<label>ID Mobil</label>
		<br>
		<input class="form-control" type="number" name="mobil_id" value="<?php echo $data->mobil_id?>">
		<br>
		<label>ID member</label>
		<br>
		<input class="form-control" type="number" name="member_id" value="<?php echo $data->member_id ?>">
		<br>
		<label>lama Rental</label>
		<input class="form-control" type="number" name="lamarental" value="<?php echo $data->lamarental?>">
		<br>
        <br>
		<button class="btn btn btn-success" type="submit" name="submit_edit_rental">Submit</button> 
	</form>
</body>
</html>
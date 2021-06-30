<?php
include 'header.html';
$mobil_id = $_GET['mobil_id'];
include 'model.php';
$model = new Model();
$data = $model->edit_mobil($mobil_id);
?>
<!doctype html>
<html lang="en">

<head>
	<title>Edit Mobil</title>
</head>

<body>
	
	<div class="container">
  	<div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1>Edit Mobil</h1>
	<a class="btn btn-sm btn-info" href="mobil.php">Kembali</a>
	<br><br>
	<form action="controller.php" method="post">

		<label>ID Mobil</label>
		<br>
		<input class="form-control" type="number" name="mobil_id" value="<?php echo $data->mobil_id ?>" >
		<br>
		<label>Merk Tipe</label>
		<br>
		<input class="form-control" type="text" name="merktipe" value= "<?php echo $data->merktipe ?>">
		<br>
		<label>Tahun Keluaran</label>
		<br>
		<input class="form-control" type="number" name="thnkeluaran" value="<?php echo $data->thnkeluaran ?>">
		<br>
		<label>Tarif</label>
		<input class="form-control" type="number" name="tarif" value= "<?php echo $data->tarif ?>">
		<br>
        <br>
		<button class="btn btn btn-success" type="submit" name="submit_edit_mobil">Submit</button> 
	</form>
</body>
</html>
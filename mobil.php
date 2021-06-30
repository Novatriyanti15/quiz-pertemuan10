<?php
include 'model.php';
$model = new Model();

?>

<html>
    <head>
    <title> Tabel Mobil</title>
    </head>

    <body>
    <body align="center">
	
	<div class="tabel">
		<h1>Data Mobil</h1>		
		<a class="btn btn-sm btn-success" href="create_mobil.php">Tambah Data</a>
		<br><br>
		<table align="center" width="800px" border="1">
			<thead align="center">
				<tr>
					<th>ID Mobil</th>
					<th>Merk Tipe</th>
					<th>Tahun Keluaran</th>
					<th>Tarif</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$result = $model->tampil_mobil();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
							<tr>
							<td><?=$data->mobil_id?></td>
							<td><?=$data->merktipe ?></td>
                            <td><?=$data->thnkeluaran?></td>
							<td>Rp. <?=$data->tarif ?> ,-</td>
							<td>
								<a name="edit" id="edit" class="btn btn-sm btn-warning" href="edit_mobil.php?mobil_id=<?=$data->mobil_id ?>">Edit</a>
								<a name="hapus" id="hapus" class="btn btn-sm btn-danger" href="controller.php?mobil_id=<?=$data->mobil_id ?>">Delete</a>
							</td>
						</tr>
					<?php endforeach;
				} else{ ?>
					<tr>
						<td colspan="8">Belum ada data pada tabel mobil</td>
					</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
</body>
    
</html>
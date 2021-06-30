<?php
include 'model.php';
$model = new Model();
?>

<!doctype html>
<html>
    <head>
    <title> Tabel Member</title>
    </head>

    <body>
    <body align="center">
	
	<div class="tabel">
		<h1>Data Member</h1>		
		<a class="btn btn-sm btn-success" href="create_member.php">Tambah Data</a>
		<br><br>
		<table align="center" width="800px" border="1">
			<thead align="center">
				<tr>
					<th>ID Member</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Telepon</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$result = $model->tampil_member();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
							<tr>
							<td><?=$data->member_id?></td>
							<td><?=$data->nama ?></td>
							<td><?=$data->alamat ?></td>
                            <td><?=$data->tlp?></td>
							<td>
								<a name="edit" id="edit" class="btn btn-sm btn-warning" href="edit_member.php?member_id=<?=$data->member_id ?>">Edit</a>
								<a name="hapus" id="hapus" class="btn btn-sm btn-danger" href="controller.php?member_id=<?=$data->member_id ?>">Delete</a>
							</td>
						</tr>
					<?php endforeach;
				} else{ ?>
					<tr>
						<td colspan="8">Belum ada data pada tabel member.</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>

</html>
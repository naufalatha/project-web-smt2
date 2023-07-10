<?php 
include 'header.php';
?>


<div class="container">
	<h2 style=" width: 100%; border-bottom: 4px solid gray"><b>Data Room</b></h2>
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">Name</th>
					<th scope="col">Max People</th>
					<th scope="col">Description</th>
					<th scope="col">Status</th>
					<th scope="col">Room Type</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td><a href="edit_room.php" class="btn btn-warning">Edit</a> 
							<a href="proses/del_room.php" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data ?')">Delete</a></button></td>
					</tr>
				</tbody>
			</table>
		<a href="tambah_room.php" class="btn btn-success">Plus Room</a>
	</div>
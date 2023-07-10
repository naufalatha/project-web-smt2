<?php
include 'header.php';
?>


<div class="container">
    <h2 style=" width: 100%; border-bottom: 4px solid gray"><b>Room Type</b></h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Is Active</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td><a href="edit_type.php" class="btn btn-warning">
                        </a>Edit<a
                        href="proses/hapus_type.php" class="btn btn-danger"
                        onclick="return confirm('Yakin Ingin Menghapus Data ?')">Delete</a></td>
            </tr>
        </tbody>
    </table>
    <a href="tambah_type.php" class="btn btn-success">Plus Room Type</a>
</div>
<?php
include 'header.php';
?>

<div class="container">
    <h2 style=" width: 100%; border-bottom: 4px solid gray"><b>Daftar Peminjaman</b></h2>
    <br>
    <h5 class="bg-success" style="padding: 7px; width: 710px; font-weight: bold;">
        <marquee>Lakukan Reload Setiap Masuk Halaman ini, untuk menghindari terjadinya kesalahan data dan informasi
        </marquee>
    </h5>
    <a href="peminjaman.php" class="btn btn-default"><i class="glyphicon glyphicon-refresh"></i> Reload</a>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">Status</th>
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
                <td><a href="proses/terima.php"
                        class="btn btn-success">Terima</a>
                    <a href="proses/tolak.php" class="btn btn-danger"
                        onclick="return confirm('Yakin Ingin Menolak ?')">Tolak</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
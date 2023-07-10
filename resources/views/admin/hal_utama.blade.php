<?php 

include 'header.php';
// pesanan baru 
// $result1 = mysqli_query($conn, "SELECT distinct invoice FROM produksi WHERE terima = 0 and tolak = 0");
// $jml1 = mysqli_num_rows($result1);

// pesanan dibatalkan/ditolak
// $result2 = mysqli_query($conn, "SELECT distinct invoice FROM produksi WHERE  tolak = 1");
// $jml2 = mysqli_num_rows($result2);

// pesanan diterima
// $result3 = mysqli_query($conn, "SELECT distinct invoice FROM produksi WHERE  terima = 1");
// $jml3 = mysqli_num_rows($result3);

?>
<div class="container">
	<div class="row">
		<div class="col-md-4" >
			<div style="background-color: #dfdfdf; padding-bottom: 60px; padding-left: 20px;padding-right: 20px; padding-top: 10px;">
				<h4>PEMINJAMAN BARU</h4>
				<h4 style="font-size: 56pt;"><b>// jumlah Peminnjam baru</b></h4>
			</div>
		</div>

		<div class="col-md-4" >
			<div style="background-color: #dfdfdf; padding-bottom: 60px; padding-left: 20px;padding-right: 20px; padding-top: 10px;">
				<h4>PEMINJAMAN DIBATALKAN</h4>
				<h4 style="font-size: 56pt;"><b>// jumlah peminjam dibatalkan</b></h4>
			</div>
		</div>

		<div class="col-md-4" >
			<div style="background-color: #dfdfdf; padding-bottom: 60px; padding-left: 20px;padding-right: 20px; padding-top: 10px;">
				<h4>PEMINJAMAN DITERIMA</h4>
				<h4 style="font-size: 56pt;"><b>// jumlah peminjam diterima</b></h4>
			</div>
		</div>

	</div>
</div>
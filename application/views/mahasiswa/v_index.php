<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">

	<title>Mahasiswa</title>

	<link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.css'); ?>">
</head>

<body>
	<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
		<div class="navbar-brand">Tugas</div>

		<div class="navbar-nav">
			<a href="" class="nav-link">Home</a>
			<a href="" class="nav-link">Tambah Data</a>
		</div>
		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link">Lalu Wathoni</a>

		</div>
	</nav>

	<div class="alert alert-primary text-center mt-4">
		Data Mahasiswa
	</div>
	<div class="container">

		<table class="table table-bordered table-sm">

			<tr>
				<th>No</th>
				<th>Nim</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Aksi</th>
			</tr>
			<tbody>
				<?php
				$no = 1;
				foreach ($tabel as $isi){
					?>
					<tr>
						<td><?php echo $no++;?></td>
						<td><?php echo $isi->nim;?></td>
						<td><?php echo $isi->nama;?></td>
						<td><?php echo $isi->alamat;?></td>
						<td>
							<a href="" class="btn btn-info btn-sm btn-primary">Edit</a>
							<a href="" class="btn btn-info  btn-sm btn-danger">Hapus</a>
						</td>
					</tr>
					<?php
				}
				?>
				
			</tbody>
			
		</table>

	</div>


	<!-- 
	<h3>selamat datang , <?= $nama_lengkap; ?></h3>
	<p> nim saya <?= $nim; ?></p>
	<hr>
	<a href="<?= $site_url('mahasiswa/tambah'); ?>">tambah</a>
	<table>

		<tr>
			<th>Nim</th>
			<th>Mahasiswa</th>
		</tr>
		<?php foreach ($mahasiswa as $key) : ?>

			<tr>
				<td>
					<?= $key['nim'] ?>
				</td>
				<td><?= $key['nama'] ?></td>
			</tr>
		<?php endforeach ?> -->
	</table>




	<script src="<?= base_url('asset/js/bootstrap.bundle.js'); ?>"></script>
</body>

</html>
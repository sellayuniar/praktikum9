<html>
<head>
</head>
<body>
	
	<?php
	header("Content-type: application/vnd-ms-excel"); //untuk mendeklarasikan file diexport ke excel
	header("Content-Disposition: attachment; filename=Data Siswa.xls"); //membuat file excel dengan nama data siswa
	?>
 
	<table border="1"> <!--membuat tabel untuk menampilkan data Pendaftaran Siswa   -->
		<tr>
		<tr>
			<th>No</th>
			<th>Jenis Pendaftaran</th>
			<th>tanggal masuk</th>
			<th>NIS</th>
			<th>Nomor Peserta </th>
			<th>Pernah Paud </th>
			<th>Pernah TK </th>
			<th>No Seri SKHUN </th>
			<th>No Seri Ijazah </th>
			<th>Hobi </th>
			<th>Cita-Cita </th>
			<th>nama lengkap </th>
			<th>Jenis Kelamin </th>
			<th>NISN </th>
			<th>NIK </th>
			<th>Tempat Lahir </th>
			<th>Tanngal Lahir </th>
			<th>Agama </th>
			<th>Berkebutuhan Khusus </th>
			<th>Alamat </th>
			<th>RT </th>
			<th>RT </th>
			<th>Nama Dusun </th>
			<th>Nama Kelurahan </th>
			<th>Kecamatan </th>
			<th>Kodepos </th>
			<th>Tempat Tinggal </th>
			<th>Modal Transportasi </th>
			<th>Nomor Hp </th>
			<th>Nomor Telepon </th>
			<th>Email Pribadi </th>
			<th>Penerima KPS </th>
			<th>Kewarganegaraan </th>
		</tr>
		
		<?php 
		include 'koneksi2.php'; //memasukan file koeksi
 
		// menampilkan data siswa
		$data = mysqli_query($koneksi,"select * from siswa"); //Membuat variabel data yang menyimpan perintah query
		$no = 1; //membuat variabel no dengan nilai 1
		while($d = mysqli_fetch_array($data)){//perulangan dengan variabel $d
		?>
		<tr> <!--Menampilkan data dari tabel siswa -->
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['jenis_pendaftaran']; ?></td>
			<td><?php echo $d['tanggal_masuk_sekolah']; ?></td>
			<td><?php echo $d['NIS']; ?></td>
			<td><?php echo $d['nomor_peserta_ujian']; ?></td>
			<td><?php echo $d['pernah_paud']; ?></td>
			<td><?php echo $d['pernah_tk']; ?></td>
			<td><?php echo $d['no_seri_SKHUN']; ?></td>
			<td><?php echo $d['no_seri_ijazah']; ?></td>
			<td><?php echo $d['Hobi']; ?></td>
			<td><?php echo $d['cita_cita']; ?></td>
			<td><?php echo $d['nama_lengkap']; ?></td>
			<td><?php echo $d['jenis_kelamin']; ?></td>
			<td><?php echo $d['NISN']; ?></td>
			<td><?php echo $d['NIK']; ?></td>
			<td><?php echo $d['tempat_lahir']; ?></td>
			<td><?php echo $d['tanggal_lahir']; ?></td>
			<td><?php echo $d['agama']; ?></td>
			<td><?php echo $d['berkebutuhan_khusus']; ?></td>
			<td><?php echo $d['alamat']; ?></td>
			<td><?php echo $d['RT']; ?></td>
			<td><?php echo $d['RW']; ?></td>
			<td><?php echo $d['nama_dusun']; ?></td>
			<td><?php echo $d['nama_kelurahan']; ?></td>
			<td><?php echo $d['kecamatan']; ?></td>
			<td><?php echo $d['kode_pos']; ?></td>
			<td><?php echo $d['tempat_tinggal']; ?></td>
			<td><?php echo $d['modal_transportasi']; ?></td>
			<td><?php echo $d['nomor_hp']; ?></td>
			<td><?php echo $d['nomor_telepon']; ?></td>
			<td><?php echo $d['email_pribadi']; ?></td>
			<td><?php echo $d['penerima_kps']; ?></td>
			<td><?php echo $d['kewarganegaraan']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>
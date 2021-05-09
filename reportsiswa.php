<?php  
session_start(); // memulai session
include('koneksi2.php'); //memasukan file koneksi2.php
require 'vendor/autoload.php'; //merequire file autoload.php
use PhpOffice\PhpSpreadsheet\Spreadsheet; //menggunakan namespace dari PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\Writer\Xlsx; //menggunakan namespace dari PhpSpreadsheet

$spreadsheet = new Spreadsheet(); //membuat objek dengan nama $spreadsheet menggunakan class spreadsheet
$sheet = $spreadsheet -> getActiveSheet(); //membuat variabel $sheet untuk activesheet di file excel
//Mengisi cell pada file excel
$sheet -> setCellValue('A1','No');
$sheet -> setCellValue('B1','Jenis Pendaftaran');
$sheet -> setCellValue('C1','Tanggal Masuk');
$sheet -> setCellValue('D1','NIS');
$sheet -> setCellValue('E1','Nomor Peserta');
$sheet -> setCellValue('F1','Pernah Paud');
$sheet -> setCellValue('G1','Pernah TK');
$sheet -> setCellValue('H1','No. Seri SKHUN ');
$sheet -> setCellValue('I1','No. Seri Ijazah ');
$sheet -> setCellValue('J1','Hobi');
$sheet -> setCellValue('K1','Cita-cita');
$sheet -> setCellValue('L1','Nama Lengkap');
$sheet -> setCellValue('M1','Jenis Kelamin');
$sheet -> setCellValue('N1','NISN');
$sheet -> setCellValue('O1','NIK');
$sheet -> setCellValue('P1','Tempat Lahir');
$sheet -> setCellValue('Q1','Tanggal Lahir');
$sheet -> setCellValue('R1','Agama');
$sheet -> setCellValue('S1','Berkebutuhan Khusus');
$sheet -> setCellValue('T1','Alamat');
$sheet -> setCellValue('U1','RT');
$sheet -> setCellValue('V1','RW');
$sheet -> setCellValue('W1','Nama Dusun');
$sheet -> setCellValue('X1','Nama Kelurahan');
$sheet -> setCellValue('Y1','Kecamatan');
$sheet -> setCellValue('Z1','Kodepos');
$sheet -> setCellValue('AA1','Tempat Tinggal');
$sheet -> setCellValue('AB1','Moda Transportasi');
$sheet -> setCellValue('AC1','No HP');
$sheet -> setCellValue('AD1','No Telpon');
$sheet -> setCellValue('AE1','E-mail Pribadi');
$sheet -> setCellValue('AF1','Penerima KPS/KKS/PKH/KIP');
$sheet -> setCellValue('AG1','Kewarganegaan');

$query = mysqli_query($koneksi, "SELECT *FROM siswa"); //membuat variabel query untuk menyimpan eksekusi query ke database untuk menampilkan isi tabel tb_siswa
$i = 2; //membuat variabel $i yang memiliki nilai 2
$no = 1; //membuat variabel $no yang memiliki nilai 1
while ($row = mysqli_fetch_array($query)) { //membuat perulangan dengan variabel $row
//Mengisi cell  excel ddngan data yang ada pada database
$sheet -> setCellValue('A'.$i, $no++);
$sheet -> setCellValue('B'.$i, $row['jenis_pendaftaran']);
$sheet -> setCellValue('C'.$i, $row['tanggal_masuk_sekolah']);
$sheet -> setCellValue('D'.$i, $row['NIS']);
$sheet -> setCellValue('E'.$i, $row['nomor_peserta_ujian']);
$sheet -> setCellValue('F'.$i, $row['pernah_paud']);
$sheet -> setCellValue('G'.$i, $row['pernah_tk']);
$sheet -> setCellValue('H'.$i, $row['no_seri_SKHUN']);
$sheet -> setCellValue('I'.$i, $row['no_seri_ijazah']);
$sheet -> setCellValue('J'.$i, $row['Hobi']);
$sheet -> setCellValue('K'.$i, $row['cita_cita']);
$sheet -> setCellValue('L'.$i, $row['nama_lengkap']);
$sheet -> setCellValue('M'.$i, $row['jenis_kelamin']);
$sheet -> setCellValue('N'.$i, $row['NISN']);
$sheet -> setCellValue('O'.$i, $row['NIK']);
$sheet -> setCellValue('P'.$i, $row['tempat_lahir']);
$sheet -> setCellValue('Q'.$i, $row['tanggal_lahir']);
$sheet -> setCellValue('R'.$i, $row['agama']);
$sheet -> setCellValue('S'.$i, $row['berkebutuhan_khusus']);
$sheet -> setCellValue('T'.$i, $row['alamat']);
$sheet -> setCellValue('U'.$i, $row['RT']);
$sheet -> setCellValue('V'.$i, $row['RW']);
$sheet -> setCellValue('W'.$i, $row['nama_dusun']);
$sheet -> setCellValue('X'.$i, $row['nama_kelurahan']);
$sheet -> setCellValue('Y'.$i, $row['kecamatan']);
$sheet -> setCellValue('Z'.$i, $row['kode_pos']);
$sheet -> setCellValue('AA'.$i, $row['tempat_tinggal']);
$sheet -> setCellValue('AB'.$i, $row['modal_transportasi']);
$sheet -> setCellValue('AC'.$i, $row['nomor_hp']);
$sheet -> setCellValue('AD'.$i, $row['nomor_telepon']);
$sheet -> setCellValue('AE'.$i, $row['email_pribadi']);
$sheet -> setCellValue('AF'.$i, $row['penerima_kps']);
$sheet -> setCellValue('AH'.$i, $row['kewarganegaraan']);
$i++;
}

$styleArray = [//untuk mengatur border
			'borders' => [
				'allBorders'=>[
					'borderStyle'=> \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],

		];
$i =$i -1; // membuat variabel $i yang menimpan nilai $i-1
$sheet->getStyle('A1:AI'.$i)->applyFromArray($styleArray);//untuk mengimplementasikan tampilan border yang sudah diatur

$writer = new Xlsx($spreadsheet); //membuat variabel $writer untuk membuat file xlsx
$writer->save('Data Pendaftaran Siswa.xlsx'); //meyimpan report file excel dengan nama file Report Data Siswa.xlsx

?>
<?php
require 'vendor/autoload.php'; //merequire file autoload.php
use PhpOffice\PhpSpreadsheet\Spreadsheet; //menggunakan namespace dari PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\Writer\Xlsx; //menggunakan namespace dari PhpSpreadsheet
 
$spreadsheet = new Spreadsheet(); //membuat objek dengan nama $spreadsheet menggunakan class spreadsheet
$sheet = $spreadsheet->getActiveSheet(); //membuat variabel $sheet untuk activesheet di file excel
$sheet->setCellValue('A1', 'Hello World !'); //Mengisi cell A1 pada excel dengan teks Hello Word
 
$writer = new Xlsx($spreadsheet); //membuat variabel $ writer untuk membuat file xlsx
$writer->save('hello world.xlsx'); //meyimpan report file excel dengan nama file hello wors.xlsx
?>
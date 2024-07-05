<?php


$nama =$_POST['nama'];
$noTelp =$_POST['noTelp'];
$keperluan =$_POST['keperluan'];
$date =$_POST['tanggal'];

$dataAntrian ="$nama\t|\t$noTelp\t|\t$keperluan\t|\t$date\n";

$fileAntrian = 'data_antrian.txt';
$fh = fopen($fileAntrian,'a');
fwrite($fh,$dataAntrian);
fclose($fh);

echo "Terima kasih, $nama! anda sudah terdaftar pada antrian.";


?>



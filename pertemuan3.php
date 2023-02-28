<?php
session_start();
unset($_SESSION['message']);

function displayErrorMessage(){
    $_SESSION['message'] = '<p>Data yang kamu input <span class="color-red">tidak sesuai format!</span></p>';
    header("Location: index.php");
    exit;
}

$nama = 'Muchlas Syahlanisyiam';
$nim = '201011401978';
$mataKuliah = 'Pemrograman Web';
$jumlahKehadiran = 0;
$tugas = 0;
$uts = 0;
$uas = 0;

if(count($_POST) != 0){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $mataKuliah = $_POST['mata_kuliah'];
    $jumlahKehadiran = ((int) $_POST['kehadiran']);
    $tugas = (int)$_POST['tugas'];
    $uts = (int)$_POST['uts'];
    $uas = (int)$_POST['uas'];
}

$kehadiran = ($jumlahKehadiran / 18) * 100;
$nilaiAkhir = ($kehadiran * 0.1) + ($tugas * 0.2) + ($uts * 0.3) + ($uas * 0.4);

$grade = 'E';
$keterangan = 'Tidak Lulus';

if($nilaiAkhir >= 65) {
    $keterangan = 'Lulus';
} else {
    $keterangan = 'Tidak Lulus';
}

if($nilaiAkhir > 100) {
    displayErrorMessage();
} else if($nilaiAkhir >= 80) {
    $grade = 'A';
} else if($nilaiAkhir >= 70) {
    $grade = 'B';
} else if($nilaiAkhir >= 60) {
    $grade = 'C';
} else if($nilaiAkhir >= 50) {
    $grade = 'D';
} else {
    $grade = 'E';
}

echo('<a href="index.php">Back</a>');
echo('<h1>Hasil Akhir</h1>');
echo('<p>Nama Mahasiswa: '. $nama .'</p>');
echo('<p>NIM: '. $nim .'</p>');
echo('<p>Mata Kuliah: '. $mataKuliah .'</p>');
echo('<p>Jumlah Kehadiran: '. $jumlahKehadiran .'</p>');
echo('<p>Total Pertemuan: 18</p>');
echo('<p>Nilai Tugas: '. $tugas .'</p>');
echo('<p>Nilai UTS: '. $uts .'</p>');
echo('<p>Nilai UAS: '. $uas .'</p>');
echo('<p>Nilai Akhir: '. $nilaiAkhir .'</p>');
echo('<p>Grade: '. $grade .'</p>');
echo('<p>Keterangan: '. $keterangan .'</p>');
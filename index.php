<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muchlas Syahlanisyiam - 201011401978 - Pertemuan 3</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
        .color-red {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Program Menghitung Nilai Mahasiswa</h1>
    <p style="font-size: 20px">Nama : Muchlas Syahlanisyiam</p>
    <p style="font-size: 20px">NIM : 201011401978</p>
    <p style="font-size: 20px">Kelas : 06TPLE004</p>
    <?php
    echo isset($_SESSION['message']) ? $_SESSION['message'] : '';
    ?>    
    <form action="pertemuan3.php" method="post">
        <div>
            <label for="nama">Nama</label>
            <input name="nama" type="text" value="Muchlas Syahlanisyiam">
        </div>
        <div>
            <label for="nim">NIM</label>
            <input name="nim" type="text" value="201011401978">
        </div>
        <div>
            <label for="mata_kuliah">Mata Kuliah</label>
            <select name="mata_kuliah">
                <option value="Pemrograman Web">Pemrograman Web</option>
                <option value="Kerja Praktek">Kerja Praktek</option>
                <option value="Pemrograman Mobile">Pemrograman Mobile</option>
                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
            </select>
        </div>
        <div>
            <label for="kehadiran">Nilai Kehadiran <span class="color-red">(max: 18)</span></label>
            <input id="kehadiran" name="kehadiran" type="number">
        </div>
        <div>
            <label for="tugas">Nilai Tugas <span class="color-red">(max: 100)</span></label>
            <input id="tugas" name="tugas" type="number">
        </div>
        <div>
            <label for="uts">UTS <span class="color-red">(max: 100)</span></label>
            <input id="uts" name="uts" type="number">
        </div>
        <div>
            <label for="uas">UAS <span class="color-red">(max: 100)</span></label>
            <input id="uas" name="uas" type="number">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $bil_1 = $_POST['suku_pertama'];
    $bil_2 = $_POST['suku_kedua'];
    $n = $_POST['suku_ke_n'];
    $beda = $bil_2 - $bil_1;
    $hasil = $bil_1 . " $bil_2 ";
    $suku_ke = $bil_1 + ($n - 1) * $beda;
    for ($i = 0; $i < $n - 2; $i++) {
        $output = $bil_2 + $beda;
        $hasil = $hasil . " $output";
        $bil_1 = $bil_2;
        $bil_2 = $output;
    }
} else {
    $hasil = null;
    $suku_ke = null;
    $n = null;
    $bil_1 = null;
    $bil_2 = null;
    $beda = null;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Baris Aritmatika</title>
</head>

<body>
    <div class="container">
        <h1>Perhitungan Baris Aritmatika</h1> <br>
        <form id="form" action="#" method="POST">
            <div class="form_group">
                <label for="suku_pertama">Masukan Suku Pertama</label>
                <input type="text" id="suku_pertama" name="suku_pertama" class="fibonanci"
                    placeholder="Silahkan Masukkan Suku Pertama .."> <br>
                <div class="form_group">
                    <label for="suku_kedua">Masukan Suku Kedua</label>
                    <input type="text" name="suku_kedua" id="suku_kedua" class="fibonanci"
                        placeholder="Silahkan Masukkan Suku Kedua .."> <br>
                </div>
                <div class="form_group">
                    <label for="suku_ke_n">Masukan Nilai Suku Yang Dicari</label>
                    <input type="text" name="suku_ke_n" id="suku_ke_n" class="fibonanci"
                        placeholder="Silahkan Masukan Nilai Suku Yang Dicari .."> <br>
                </div>
                <button type="submit" value="submit" name="submit">Check</button>
        </form>
        <br><br>
        <?php if ($hasil != null && $n != null && $suku_ke != null && $beda != null) { ?>
        <h4>Deret Aritmatika : <?= $hasil ?></h4>
        <h4>Nilai Suku Ke-<?= $n ?>: <?= $suku_ke ?></h4>
        <?php } ?>
    </div>
</body>

</html>
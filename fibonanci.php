<?php
if (isset($_POST['submit'])) {
    $bil_1 = $_POST['angka_pertama'];
    $bil_2 = $_POST['angka_kedua'];
    $hasil = $bil_1 . " $bil_2 ";
    for ($i = 0; $i < 10; $i++) {
        $output = $bil_2 + $bil_1;
        $hasil = $hasil . " $output";
        $bil_1 = $bil_2;
        $bil_2 = $output;
    }
} else {
    $hasil = null;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Deret Fibonanci</title>
</head>

<body>
    <div class="container">
        <h1>Perhitungan Deret Fibonanci</h1> <br>
        <form id="form" action="#" method="POST">
            <div class="form_group">
                <label for="angka_pertama">Masukan Angka Pertama</label>
                <input type="text" id="angka_pertama" name="angka_pertama" class="fibonanci"
                    placeholder="Silahkan Masukkan Angka Pertama .."> <br>
                <div class="form_group">
                    <label for="angka_kedua">Masukan Angka Kedua</label>
                    <input type="text" name="angka_kedua" id="angka_kedua" class="fibonanci"
                        placeholder="Silahkan Masukkan Angka Kedua .."> <br>
                </div>
                <button type="submit" value="submit" name="submit">Check</button>
        </form>
        <br><br>
        <?php if ($hasil != null) { ?>
        <h4>Hasil Adalah : <?= $hasil ?></h4>
        <?php } ?>
    </div>
</body>

</html>
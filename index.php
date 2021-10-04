<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 03</title>
</head>

<body>
    <h1>Asas PHP</h1>

    <?php
    // komen satu baris
    /*
        komen banyak baris
    */

    $namapelajar = 'Saw';
    echo "<h2>Hello $namapelajar</h2>";

    $hadir = false;
    $umur = 21;
    $nokp = '000716020497';

    $x = 100;
    $y = '100';

    if ($x !== $y) {
        echo 'Tak sama';
    } else {
        echo 'Masih sama';
    }
    ?>

    <p>
        <?php
        echo 20 . 21;
        ?>
    </p>

    <h2>
        <?php
        $bandar = 'Alor Setar';
        $baru = 'Bandar: ';
        for($x = 0; $x <strlen($bandar); $x++) {
            $baru .= $bandar[$x] . ' ';
        }
        echo $baru;
        ?>
    </h2>
</body>

</html>
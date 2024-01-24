<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $siswa = array("2020202020" => "mozart", "2020202021" => "beethoven", "2020202022" => "bach" );

    foreach($siswa as $nik => $nama){
        echo 'NIK = ' . $nik . ' dengan nama : ' . $nama.'<br>';
    }
    ?>
</body>
</html>
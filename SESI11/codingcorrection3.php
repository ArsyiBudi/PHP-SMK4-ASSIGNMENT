<?php 
        error_reporting(0);
       
    ?>
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
    $hasil = '';
    if ($t<=10) 
    {
        $hasil = "awal bulan \n" ;
    }  else if ($t<=20) {
        $hasil = "akhir bulan \n" ;
    } else {
        $hasil = "" ;
    }
    echo $hasil;
    $t = date('d');
    echo 'hari ini adalah ' .
    ($t <= 10 ? 'awal bulan' : ($t <= 20 ? 'pertengahan bulan' : 'akhir bulan'));
    ?>
</body>
</html>
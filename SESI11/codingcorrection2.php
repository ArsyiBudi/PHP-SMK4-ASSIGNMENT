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
    $t=date('d');
    $hasil = '';
    if ($t<=10) 
    {
        $hasil = "awal bulan \n" ;
    }  else {
        $hasil = "akhir bulan \n" ;
    }
    $hasil2 = ($t <= 10 ? 'awal bulan' : 'akhir bulan');
     echo " hari ini adalah $hasil $hasil2";
    ?>
</body>
</html>
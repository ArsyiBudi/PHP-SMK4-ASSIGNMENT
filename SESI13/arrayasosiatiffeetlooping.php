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
    $siswa = array('13141115698' => 'wanda',
    '13141115699' => 'nakia', '13141115700' => 'carol');

    foreach($siswa as $nis => $nm_siswa){
        echo $nm_siswa .' memiliki NIS'. $nis. '<br>';
    }
    ?>
</body>
</html>
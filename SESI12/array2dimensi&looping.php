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
    error_reporting(0);
     $siswa = array(
     array("1314114590", "tony", "MIF1"),
     array("1514114590", "Thor", "MIF2"),
     array("1614114590", "Bruce", "MIF3"));
     echo '<center>
     <table border=1>
     <tr>
            <th>NIS</th>
            <th>nama</th>
            <th>kelas</th>
    </tr>';
for($i=0;$i<3;$i++) {
    echo '<tr>';
    for ($j=0;$j<3;$j++) {
        echo '<td>'. $siswa[$i][$j]. '</td>';
    }
    echo '</tr>';
}
echo '</table></center>';
?>
</body>
</html>
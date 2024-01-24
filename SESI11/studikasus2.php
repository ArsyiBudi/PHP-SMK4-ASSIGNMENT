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
    <h1 Align="center">MENGHITUNG JUMLAH HARI</h1>
    <form action="studikasus2.php" method="Post">
        <table Align="center">
            <td><label>Bulan:</label></td>
            <td>
              <select name="bulan">
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
              </select>
            </td>
            <td><label>Tahun</label></td>
            <td><input type="type" name="tahun"></td>
            <td><input type="submit"></td>
            <?php
            if (isset($_POST)) {
            $bulan = $_POST['bulan'];
            $tahun = $_POST['tahun'];
            }
              
                $numDays = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun);
                echo " bulan $bulan tahun  $tahun memiliki $numDays hari  ";
           
            ?>
            

           
        </table>
    </form>
</body>
</html>
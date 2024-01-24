<?php 
        error_reporting(0);
       
    ?>
<html>

    <head>
        <title> Arsyi Budi</title>
    </head>
<link rel="desain.css"></Link>
    <body>
        <br> <br> <br> <br>
        <form action="studikasus1.php" method="post">
            <center>
            <table border="0" width="30%" height="20%">
                <tr>Dafter Nilai UN Siswa</tr>
                <th colspan="2">SMKN 4 Bandung</th>
                <tr>
                    <td align="center">Nama</td>
                    <td width="50%"><input type="text" style="width:100%;" name="nama" autocomplete="off"></td>
                </tr>

                <tr>
                    <td align="center">Nilai B. Indonesia</td>
                     <td width="50%"> <input type="number" style="width:100%;" name="ind" autocomplete="off"> </td>
                </tr>

                <tr>
                    <td align="center">Nilai MTK</td>
                    <td width="50%"><input type="number" style="width:100%;" name="mat" autocomplete="off"></td>
                </tr>

                <tr>
                    <td align="center">Nilai B. Inggris</td>
                    <td width="50%"><input type="number" style="width:100%;" name="ing" autocomplete="off"></td>
                </tr>

                <tr>
                    <td align="center">Nilai Teori Kejuruan</td>
                    <td width="50%"><input type="number" style="width:100%;" name="jur" autocomplete="off"></td>
                </tr>
                
            </table> <br>

             <input type="submit" name="kirim" value="Hitung">

            </center>
        </form>
        <?php
        if (isset($_POST)) {
   $nama = $_POST['nama'];
   $nilaiBIndo = $_POST['ind'];
   $nilaiMTK = $_POST['mat'];   
   $nilaiinggris = $_POST['ing'];
   $nilaikejuruan =  $_POST["jur"];
   $nilaitotal = ($nilaiBIndo + $nilaiMTK + $nilaiinggris + $nilaikejuruan) /4 ;
        }

//    echo 'nama: ' .$nama .'<br/>';
//    echo 'nilai b. indo: ' . $nilaiBIndo . '<br/>';
//    echo 'nilai b. inggris: ' . $nilaiinggris . '<br/>';
//    echo 'nilai b. mtk: ' . $nilaiMTK . '<br/>';
//    echo 'nilai b. kejuruan: ' . $nilaikejuruan . '<br/>';
//    echo 'nilai total : ' . $nilaitotal . '<br/>';

 
   if (isset($_POST)) {
    echo ('Nama Murid :' . $nama. '<br/>');
    echo ('nilai Bindo :' . $nilaiBIndo. '<br/>') ;
    echo ('nilai mtk :' .$nilaiMTK. '<br/>');
    echo ('Nilai kejuruan :' .$nilaikejuruan. '<br/>');
    echo ('Nilai rata-rata :' .$nilaitotal);
   }
   
?>
    </body>

</html>

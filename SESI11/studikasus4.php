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
    
    if((isset($_POST['submit']))) {
        $nama = $_POST["nama"];
        $tugas = $_POST["tugas"];
        $harian = $_POST["harian"];
        $uts = $_POST["uts"];
        $uas = $_POST["uas"];

        $akhir = $tugas + $harian + $uts + $uas;
        $nilaiAkhir = $akhir / 4;
        $predikat = "";
        $color = "";

        if($nilaiAkhir >= 80) {
            $predikat = "A";
            $color = "green";
        } else if ($nilaiAkhir >= 70 &&  $nilaiAkhir <= 80) {
            $predikat = "B";
            $color = "blue";
        } else if($nilaiAkhir >= 60 && $nilaiAkhir <= 70){
            $predikat = "C";
            $color = "yellow";
        } else if ($nilaiAkhir >= 50 && $nilaiAkhir <= 60) {
            $predikat = "D";
            $color = "orange";
        } else {
            $predikat = "E";
            $color = "red";
        }

    }

?>
<style>
   
    p{
        color: <?php echo $color?>
    }
</style>
<form action="" method="Post">
            <center>
            
            <table border="0" width="30%" height="20%">
                <tr>Dafter Nilai Siswa</tr>
                <th colspan="2">SMKN 4 Bandung</th>
                <tr>
                    <td>Nama</td>
                    <td width="50%"><input type="text" style="width:100%;" name="nama" autocomplete="off"></td>
                </tr>

                <tr>
                    <td>Nilai Tugas</td>
                     <td width="50%"> <input type="number" style="width:100%;" name="tugas" autocomplete="off"> </td>
                </tr>

                <tr>
                    <td>Nilai Tes Harian</td>
                    <td width="50%"><input type="number" style="width:100%;" name="harian" autocomplete="off"></td>
                </tr>

                <tr>
                    <td>Nilai UTS </td>
                    <td width="50%"><input type="number" style="width:100%;" name="uts" autocomplete="off"></td>
                </tr>

                <tr>
                    <td>Nilai UAS</td>
                    <td width="50%"><input type="number" style="width:100%;" name="uas" autocomplete="off"></td>
                </tr>
            </table>
           

             <input type="submit" name="submit" value="Hitung">
             
            </center>
        </form>
        <center>
        <?php 
          if((isset($_POST['submit']))) : ?>
        <table border="0" width="30%" height="20%">
                    
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?php
                        echo $nama = $_POST['nama'];
                        ?> </td>
                        
                    </td>
                </tr>

                <tr>
                    <td>Nilai Tugas</td>
                     <td>:</td>
                     <td><?php
                        echo $tugas = $_POST['tugas'];
                        ?></td>
                        
                     </td>
                </tr>

                <tr>
                    <td>Nilai Tes Harian</td>
                    <td>:</td>
                    <td><?php
                        echo $harian = $_POST['harian']; 
                        ?></td>
                        
                    </td>
                </tr>

                <tr>
                    <td>Nilai UTS </td>
                    <td>:</td>
                    <td><?php
                        echo $uts = $_POST['uts'];
                        ?></td>
                        
                    </td>
                </tr>

                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><?php
                        echo $uas = $_POST['uas']; 
                        ?></td>
                        
                    </td>
                </tr>
                <tr>
                    <td>Nilai Akhir</td>
                    <td>:</td>
                    <td><p><?php
                        echo $skorakhir = (($tugas * 0.20) + ($harian * 0.10) + ($uts * 0.30) + ($uas * 0.40)/4);
                        ?></p></td>
                          
                    </td>
                </tr>
                <tr>
                    <td>Index</td>
                    <td>:</td>
                    <td><p> <?php echo $predikat?> </p></td>
                    </td>
                </tr>
                
            </table>
        <?php  endif?>
            </center>
</body>
</html>
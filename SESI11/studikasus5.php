<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="Post">
            <center>
            
            <table border="1" width="30%" height="20%">
                 <tr>
                    <td>Nim</td>
                    <td width="50%"><input type="number" style="width:100%;" name="nim" autocomplete="off"></td>
                </tr>
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
        <center>
        <?php 
          if((isset($_POST['submit']))) : ?>
        <table border="1" width="30%" height="20%">
                    
        <tr>
                    <td>Nim</td>
                    <td>:</td>
                    <td> <?php
                        echo $nama = $_POST['nim'];
                        ?> </td>
                       </td>

                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td> <?php
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
                    <td><?php
                        echo $skorakhir = (($tugas * 0.20) + ($harian * 0.10) + ($uts * 0.30) + ($uas * 0.40)/4);
                        ?></td>
                    </td>
                
            </table>
        <?php  endif?>
            </center>
</body>
</html>
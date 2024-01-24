<?php 
        error_reporting(0);
       $jumlah = $_POST['siswa'];
       
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
    
            <center>
        <h1>Form input data siswa</h1>

        <form action="forinputsiswa.php" method="Post">
        <table border="0" width="22%" height="20%">
            
            <tr>
                <td>masukkan jumlah siswa</td>
                <td><input type="number" name="siswa" value="<?php echo $i ?>"></td>
                <td><input type="submit" name="jumlah"></td>
            </tr>
        </table>
        </form>
          

            <table border="1" width="30%" height="20%">
                <tr>
                    <td><h3>NO</h3></td>
                    <td><h3>NIS</h3></td>
                    <td><h3>Nama</h3></td>
                    <td><h3>Alamat</h3></td>
                </tr>
           
    
       
      
                <tr>
                    <td>
                    <?php for ($i = 1; $i <= $jumlah; $i++) { ?>
                        <input name="<?php echo $i ?>" value="<?php echo $i ?>" readonly></input>
                    <?php   } ?>
                    </td>

                    <td>
                    <?php for ($i = 1; $i <= $jumlah; $i++) { ?>
                        <input name="<?php echo $i ?>" ? ></input>
                    <?php   } ?>
                    </td>

                    <td>
                    <?php for ($i = 1; $i <= $jumlah; $i++) { ?>
                        <input name="<?php echo $i ?>" ? ></input>
                    <?php   } ?>
                    </td>

                    <td>
                    <?php for ($i = 1; $i <= $jumlah; $i++) { ?>
                        <input name="<?php echo $i ?>" ?></input>
                    <?php   } ?>
                    </td>
                    
                </tr>
            </table>    
          <input type="submit">
    
</center>
</body>
</html>
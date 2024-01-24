<?php 
        error_reporting(0);
       $jumlah = $_POST['DATA'];
       
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
        <h1>Daftar jurusan siswa </h1>
        <h2>SMKN 4 Bandung</h2>

        <form action="" method="post">
        <table border="0" width="22%" height="20%">
            
            <tr>
                <th>masukkan jumlah Data</th>
                <td><input type="number" name="DATA" value="<?php echo $i ?>"></td>
                <td><input type="submit" name="jumlah" value="OK"></input></td>
                
            </tr>   
        </table>
        </form>
          
        <?php for ($i = 1; $i <= $jumlah; $i++) { ?>
            <table border="0" width="30%" height="20%">
                <tr align="center">
                    <td>Nama </td>
                    <td>:</td>
                    <td><input type="text"></td>
                    <td>Jurusan :</td>
                    <td>
                        <input type="radio" name="rpl">RPL
                        <input type="radio" name="mm">MM
                        <input type="radio" name="tkj">TKJ
                        <input type="radio" name="toi">TOI
                        <input type="radio" name="titl">TITL
                        <input type="radio" name="telk">TELK
                    </td>
                </tr>
            </table> 
        <?php   } ?>   
          <input type="submit">
    


    </center>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tangga berwarna</h1>
    <br><br>

    <form action="#" method="post">
    <label for="data">Jumlah Anak Tangga</label>
    <input type="number" name="data" id="data" min="0"><br><br>
    <label for="warna">warna</label>
    <input type="radio" name="radio" id="warna" value="hijau">
    <label for="warna">hijau</label>
    <input type="radio" name="radio" id="warna" value="merah">
    <label for="warna">merah</label>
    <input type="radio" name="radio" id="warna" value="kuning">
    <label for="warna">kuning</label>
    <input type="radio" name="radio" id="warna" value="biru">
    <label for="warna">biru</label>
    <input type="radio" name="radio" id="warna" value="abu">
    <label for="warna">abu</label><br><br>
    <h2>anak tangga yang ingin dibuat</h2>
    <input type="radio" name="tangga" id="tangga" value="naik">
    <label for="tangga">naik</label>
    <input type="radio" name="tangga" id="tangga" value="turun">
    <label for="tangga">turun</label><br><br>
    <input type="submit" value="buat"><br><br>
    </form>

    <?php
    if ($_POST) {
        $data = $_POST['data'];
        $warna = $_POST['radio'];
        $tangga = $_POST['tangga'];

        switch ($warna){
            case $warna == "hijau":
                $warna = "lime";
                break;
            case $warna == "merah":
                $warna = "red";
                break;
             case $warna == "kuning":
                $warna = "yellow";
                break;
             case $warna == "biru":
                $warna = "blue";
                break;
             case $warna == "abu":
                $warna = "gray";
                break;
            default:
                $warna = "black";
                break;
            }

        if ($tangga == "naik") {
            for ($i = 1; $i <= $data; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo " <a style='color: $warna; background-color: $warna;'>##</a>";
                }
                echo "<br>";
            }
        }

        else if ($tangga == "turun") {
            for ($i = 1; $i <= $data; $i++) {
                for ($j = $data; $j >= $i; $j--) {
                    echo " <a style='color: $warna; background-color: $warna;'>##</a>";

                }
                echo "<br>";
            }
        }
                
        
    }

    ?>
    
    

</body>
</html>
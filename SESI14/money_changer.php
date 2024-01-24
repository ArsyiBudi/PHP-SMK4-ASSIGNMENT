<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Money Charger</h1>
    <table>
        <tr>
            <th>Mata uang Asing</th>
            <th>Mata uang Indonesia</th>
        </tr>

        <tr>
            <td>Dollar Amerika</td>
            <td>Rp. 12000</td>
        </tr>
        <tr>
            <td>Dollar Singapura</td>
            <td>Rp. 7000</td>
        </tr>
        <tr>
            <td>Yen</td>
            <td>Rp.4000</td>
        </tr>
        <tr>
            <td>won</td>
            <td>Rp.11</td>
        </tr>
    </table>
    <h2>Transaksi</h2>
    <form action="money_changer.php" method="post">
            <label for="data">Uang dalam rupiah Rp.</label>
            <input type="number" name="angka" id="data" min="0" required>
            <select name="pil_matUang" id="mataUang">
                <option value="kosong" disabled selected hidden>nama mata uang</option>
                <option value="damerika">Dollar Amerika</option>
                <option value="dsingapura">Dollar Singapura</option>
                <option value="yjepang">Yen Jepang</option>
                <option value="wkorea">Won Korea</option>
            </select>
            <input type="submit" value="convert">
    </form>

    <?php

if ($_POST) {
    $angka = $_POST['angka'];
    $matUang = $_POST['pil_matUang'];
    $konversi = array (12000,7000,4000,11);
    $h_konversi; $pilihan = 0;

    function konversi($angkas, $konversiu)
    {
        return $angkas / $konversiu;
    }


        switch ($matUang) {
            case "damerika":
                $pilihan = 0;
                $matUang = "Dollar Amerika";
                $h_konversi = konversi($angka, $konversi[$pilihan]);
                break;

            case "dsingapura":
                $pilihan = 1;
                $matUang = "Dollar Singapura";
                $h_konversi = konversi($angka, $konversi[$pilihan]);
                break;

            case "yjepang":
                $pilihan = 2;
                $matUang = "Yen";
                $h_konversi = konversi($angka, $konversi[$pilihan]);
                break;

            case "wkorea":
                $pilihan = 3;
                $matUang = "Won";
                $h_konversi = konversi($angka, $konversi[$pilihan]);
                break;

            default:
                echo "form belum lengkap";
                break;

        }

        echo "Rp. $angka = $h_konversi $matUang";
    }
    
    ?>

</body>
</html>
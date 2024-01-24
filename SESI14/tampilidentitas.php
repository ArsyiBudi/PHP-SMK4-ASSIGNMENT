<?php 
    function tampil_identitas($nama, $kelas, $alamat) {
        echo 'nama saya '.  $nama  . ' <br/> ';
        echo 'kelas saya '. $kelas . '<br/>';
        echo 'alamat saya di' . $alamat . '<br/>';
    }

    function hitung_umur($tahun_lahir, $tahun_sekarang) {
        return $tahun_sekarang - $tahun_lahir;
    }

    tampil_identitas('ilham', 'xi rpl', ' bandung');

    $umur_saya = hitung_umur(2004, 2020);

    echo 'umur saya '. $umur_saya. 'tahun';
?>
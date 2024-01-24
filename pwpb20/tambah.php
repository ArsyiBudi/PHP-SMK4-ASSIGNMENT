<?php
    include "lib/library2.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nis = $_POST['nis'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $kelas = $_POST['id_kelas'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];
        $golongan_darah = $_POST['golongan_darah'];
        $nama_ibu = $_POST['nama_ibu'];
        $foto = $_FILES['foto'];

        if (!empty($foto) AND $foto['error'] == 0) {
            $path = './images/';
            $upload = move_uploaded_file($foto['tmp_name'], $path . $foto['name']);

            if (!$upload) {
                flash('error', 'upload file gagal');
                header('location:index.php');
            }
            $file = $foto['name'];
        }

        $sql = "INSERT INTO siswa VALUES ('$nis','$nama_lengkap','$jenis_kelamin','$kelas','$jurusan','$alamat','$golongan_darah','$nama_ibu','$file')";

                if($mysql->query($sql)) {
                    flash('sukses', 'data berhasil diubah');
                }
        header('location: index.php');
    }

        
    $success = flash('success');
    $error = flash('error');
    // ambil data kelas

    $sql = "SELECT * FROM t_kelas";
    $datakelas = $mysql->query($sql) or die ($mysql->error);

    include "views/v_tambah.php";
?>
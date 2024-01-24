<?php
    include 'lib/library2.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nis = $_POST['nis'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $kelas = $_POST['id_kelas'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];
        $golongan_darah = $_POST['golongan_darah'];
        $nama_ibu = $_POST['nama_ibu'];
        $file = $_POST['foto'];
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

        $sql = "UPDATE siswa SET 
                nama_lengkap='$nama_lengkap',
                jenis_kelamin='$jenis_kelamin',
                id_kelas='$kelas',
                jurusan='$jurusan',
                alamat='$alamat', 
                golongan_darah='$golongan_darah',
                nama_ibu='$nama_ibu', 
                file ='$file' 
                WHERE nis='$nis'";

                if($mysql->query($sql)) {
                    flash('sukses', 'data berhasil diubah');
                }

        $mysql->query($sql) or die ($mysql->error());

        header('location: index.php');
    }

    // ambil data kelas 
    $sql = "SELECT * FROM t_kelas";
    $datakelas = $mysql->query($sql) or die ($mysql->ero);

    $nis = $_GET['nis'];

    if (empty($nis)) header('location: index.php');

    $sql = "SELECT * FROM siswa WHERE nis = '$nis'";
    $query = $mysql-> query($sql);
    $siswa = $query->fetch_array();

    include "views/v_tambah.php";
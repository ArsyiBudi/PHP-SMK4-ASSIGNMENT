<?php
    include 'lib/library2.php';

    $nis = $_GET['nis'];
    
    $sql = "DELETE FROM siswa WHERE nis='$nis' ";

    if(!empty($nis)) {
        $sql = "DELETE FROM siswa WHERE nis='$nis'";
    
    if ($mysql->query($sql)) {
        echo 1;
    } else {
        echo 0;
        }
    }
  ?>
<?php 
 include 'lib/library2.php';

    cekLogin();
    
 $sql = 'SELECT * FROM siswa';


// membuat querry SQL mengambil data siswa 
$sql = 'SELECT * FROM siswa INNER JOIN t_kelas ON 
(siswa.id_kelas = t_kelas.id_kelas)';

// searching 
$search = @$_GET['search'];
if (!empty($search)) $sql .= " WHERE nis LIKE '%$search%' OR nama_lengkap LIKE '%$search%'";
$listsiswa = $mysql->query($sql);

// ordering
$order_field = @$_GET['sort'];         // mengubah field yang akan diorder
$order_mode = @$_GET['order'];         // mengambil modenya, ascending atau descending

if(!empty($order_field) && !empty($order_mode)) $sql .= "ORDER BY $order_field $order_mode";

$listsiswa = mysqli_query($mysql, $sql);

 include 'views/v_index.php';
?>
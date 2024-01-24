 <html>
 <head>
 <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" />
    <!-- toastr plugins -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 </head>
 <body>
 <?php 
        $action = './tambah.php';
        if (!empty($siswa)) $action= './edit.php';
    ?>
<form action="<?= $action ?>" method="post" enctype="multipart/form-data">
    NIS <input type="text" <?= $action == './edit.php' ? 'readonly': ''?> name="nis" id="nis" value="<?= @$siswa['nis'] ?>"><br>
    Nama Lengkap <input type="text" name="nama_lengkap" id="nama_lengkap" value="<?= @$siswa['nama_lengkap'] ?>"><br>
    Jenis Kelamin<br>
    <input type="radio" name="jenis_kelamin" value="L" <?= @$siswa['jenis_kelamin'] == 'L' ? 'checked' : ' ' ?> >LAKI LAKI<br>
    <input type="radio" name="jenis_kelamin" value="P" <?= @$siswa['jenis_kelamin'] == 'P' ? 'checked' : ' ' ?> >perempuan<br>
    KELAS<br>
    <select name="id_kelas" class="select1">
        <option value="">[ Pilih Kelas ]</option>
        <?php while ($murid = @$datakelas -> fetch_array() ) { ?>
        <option value="<?php echo $murid['id_kelas'] ?>" <?php echo  @$siswa['id_kelas'] == $murid['id_kelas'] ? 'selected' : '' ?>>
        <?php echo $murid['nama_kelas'] ?>
        </option>
        <?php } ?>
    </select>
    <br>
    Jurusan <input type="text" name="jurusan" value="<?= @$siswa['jurusan'] ?>"><br>
    Alamat <input type="text" name="alamat" value="<?= @$siswa['alamat'] ?>"><br>
    Golongan_Darah
    <select name="golongan_darah">
        <option value="O" <?= @$siswa['golongan_darah'] == 'O' ? 'selected' : ' ' ?> >O</option>
        <option value="A" <?= @$siswa['golongan_darah'] == 'A' ? 'selected' : ' ' ?> >A</option>
        <option value="B" <?= @$siswa['golongan_darah'] == 'B' ? 'selected' : ' ' ?> >B</option>
        <option value="AB" <?= @$siswa['golongan_darah'] == 'AB' ? 'selected' : ' ' ?> >AB</option>
    </select>
    <br>
    Nama_ibu <input type="text" name="nama_ibu" value="<?= @$siswa['nama_ibu'] ?>"><br>
    <div class="form-group">
            <label class="col-sm-2 control-label">FOTO</label>
            <div class="col=sm-6">
            <?php if ($action == "./edit.php") { ?>
                    <img width="100" height="100" src="<?php echo empty($siswa['file']) ? './images/default.png' : 
                    './images/'.$siswa['file']?>" id="output">
                    <input type="hidden" name="foto" value="<?php echo@$siswa['file']?>">
                <?php } else { ?>
                    <img src="./images/default.png" id="output" width="100px" height="100px">
                <?php } ?>
                <input type="file" name="foto">
            </div>
    </div>
    <input type="submit" value="simpan">
</form>
</body>
</html>
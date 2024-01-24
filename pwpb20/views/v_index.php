<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" />
    <!-- toastr plugins -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>
<body>    
<center>
<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>foto</th>
            <th>
                NIS
                <a href="index.php?sort=nis&order=asc">↑</a>
                <a href="index.php?sort=nis&order=desc">↓</a>
            </th>
            <th>
                NAMA LENGKAP
                <a href="index.php?sort=nama_lengkap&order=asc">↑</a>
                <a href="index.php?sort=nama_lengkap&order=desc">↓</a>
            </th>
            <th>
                JENIS KELAMIN
                <a href="index.php?sort=jenis_kelamin&order=asc">↑</a>
                <a href="index.php?sort=jenis_kelamin&order=desc">↓</a>
            </th>
            <th>
                KELAS
                <a href="index.php?sort=kelas&order=asc">↑</a>
                <a href="index.php?sort=kelas&order=desc">↓</a>
            </th>
            <th>
                JURUSAN
                <a href="index.php?sort=jurusan&order=asc">↑</a>
                <a href="index.php?sort=jurusan&order=desc">↓</a>
            </th>
            <th>
                alamat
                <a href="index.php?sort=alamat&order=asc">↑</a>
                <a href="index.php?sort=alamat&order=desc">↓</a>
            </th>
            <th>
                golongan_darah
                <a href="index.php?sort=golongan_darah&order=asc">↑</a>
                <a href="index.php?sort=golongan_darah&order=desc">↓</a>
            </th>
            <th>nama_ibu
                <a href="index.php?sort=nama_ibu&order=asc">↑</a>
                <a href="index.php?sort=nama_ibu&order=desc">↓</a>
            </th>
            <th>aksi</th>
        </tr>
        <a href="tambah.php">tambah data</a><br><br>
        <a href="?" class="reset"><br><br>reset</a>

        <form method="GET" action="index.php">Cari berdasarkan NIS dan NAMA
            <input type="text" name="search" value="<?= @$search ?>">
            <button type="submit">Cari</button>
        </form>
    </thead>
    <tbody>
        <?php 
        $i = 1;
        while ($siswa = $listsiswa -> fetch_array() ) { ?>
        <tr>
            <td><?= $i++ ?></td>            
            <td>
                            <?php if (!empty($siswa['file'])) { ?>
                                <img width="90" height="90" src="./images/<?php echo $siswa['file'] ?>">

                            <?php } else { ?>
                                <img width="90" height="90" src="./images/">
                            <?php } ?>
            </td>
            <td><?= $siswa['nis'] ?></td>
            <td><?= $siswa['nama_lengkap'] ?></td>
            <td><?= $siswa['jenis_kelamin'] ?></td>
            <td><?= $siswa['id_kelas'] ?></td>
            <td><?= $siswa['jurusan'] ?></td>
            <td><?= $siswa['alamat'] ?></td>
            <td><?= $siswa['golongan_darah'] ?></td>
            <td><?= $siswa['nama_ibu'] ?></td>
            <td>
                <a href="edit.php?nis=<?= $siswa['nis'] ?>" class="btn btn-warning"><i></i>Edit</a>
                <a href="delete.php?nis=<?= $siswa['nis'] ?>" class="btn btn-danger btnDelete">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>

    <a href="logout.php">Logout</a>
</table>
</center>

<div class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden>&times;</span></button>
                    <h4 class="modal-title"></h4>
                </div>

                <div class="modal-body"></div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btnYa">Ya</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    $(function() {
        $(".btnDelete").on("click", function(e) {
            e.preventDefault();
            var nama = $(this).parent().parent().children()[2];
            nama = $(nama).html();

            var tr = $(this).parent().parent();

            $(".modal").modal('show');
            $(".modal-title").html('Konfirmasi');
            $(".modal-body").html("Anda yakin ingin menghapus data <b>" + nama + "</b> ?");

            var href = $(this).attr('href');

            $('.btnYa').off();
            $('.btnYa').on('click', function() {
                $.ajax({
                    'url': href,
                    'type': 'POST',
                    'success': function(result) {
                        if (result == 1) {
                            $(".modal").modal('hide');
                            tr.fadeOut();

                            toastr.success('Data <b>' + nama +
                                '</b> Berhasil dihapus', 'Informasi');
                        } else {
                            $(".modal").modal('hide');
                            toastr.error('Data <b>' + nama +
                                '</b> Tidak Berhasil dihapus', 'Informasi');
                        }
                    }
                });
            });
        });
    });
    </script>
</body>
</html>
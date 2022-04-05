<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Praktikum 7</title>
  </head>
<body>

        <!-- Gilang Maulana -->
        <!-- 2010631170075 -->
        <!-- 4C -->

        <?php 
            include 'koneksi.php';
             $query = mysqli_query($koneksi,"SELECT krs.*, mahasiswa.*, matakuliah.* FROM krs inner join mahasiswa on krs.mahasiswa_npm = mahasiswa.npm inner join matakuliah on krs.matakuliah_kodemk = matakuliah.kodemk");
             $no = 1;

        ?>

        <div class="container">
            <div class="row d-flex justify-content-center mt-5">
                <div class="col-12">
                    <a href="form.php" class="btn btn-primary">Tambah Data</a>
                    <h3 class="text-center mb-4">Data KRS Mahasiswa</h3>
            
                     <table class="table">
                       <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Mata Kuliah</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php foreach($query as $data) : ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $data['nama_mahasiswa']; ?></td>
                                <td><?= $data['nama_matkul']; ?></td>
                                <td>
                                   <b><?= $data['nama_mahasiswa']; ?></b>  Mengambil Mata Kuliah <b><?= $data['nama_matkul']; ?></b> <?= $data['jumlah_sks']; ?> SKS
                                </td>
                                 <td>
                                    <a href="edit.php?id=<?=$data['id']?>" class="btn btn-warning">Edit</a>
                                    <span>|</span>
                                    <a href="proses.php?id=<?= $data['id']?>" onclick="return confirm('yakin ingin dihapus?')" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        </tbody>

                          <?php endforeach; ?>

                    </table>
                </div>
            </div>
        </div>

</body>
</html>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Tag Input -->
    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

    <title>Praktikum 7 | Form KRS</title>
  </head>
<body>

<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $sql = mysqli_query($koneksi, "SELECT id, krs.mahasiswa_npm, krs.matakuliah_kodemk, mahasiswa.nama_mahasiswa as nama_mahasiswa, matakuliah.nama_matkul as nama_matakuliah FROM krs INNER JOIN mahasiswa ON krs.mahasiswa_npm = mahasiswa.npm INNER JOIN matakuliah ON krs.matakuliah_kodemk = matakuliah.kodemk and id=$id");
    $data = mysqli_fetch_array($sql);
?>

        <!-- form input data -->
        <div class="container">
            <div class="row d-flex justify-content-center mt-5">
                <div class="col-6">
                    <h3 class="text-center">Edit Data</h3>
                   <form class="form-container" action="proses.php" method="POST">
                   
                    <div class="mb-2">
                      <input type="text" class="form-control" hidden id="id" name="id" placeholder="Masukkan id" value="<?= $data['id'] ?>"/>
                    </div>


                    <div class="mb-2">
                      <label for="npm" class="form-label">Mahasiswa</label>
                      <select class="form-select" name="mahasiswa_npm" id="mahasiswa_npm">
                      <option value="<?= $data['npm']?>"><?= $data['nama_mahasiswa']?></option>
                      <?php 
                      $queryNama = mysqli_query($koneksi, "select * from mahasiswa");
                      
                      foreach ($queryNama as $d) : ?>
                        <option <?php if( $d['nama']== $d['nama_mahasiswa']){echo "hidden"; } ?> value="<?= $d['npm']?>"><?= $d['nama_mahasiswa']?></option>
                        <?php endforeach; ?>
                      </select> 
                    </div>
   
                    <div class="mb-2">
                      <label for="matakuliah" class="form-label">Mata Kuliah</label>
                        <select class="form-select" name="matakuliah_kodemk" id="matakuliah_kodemk">
                              <option value="<?= $mk['kodemk'] ?>"><?= $mk['nama_matakuliah'] ?></option>
                              <?php 
                                $query1 = mysqli_query($koneksi, "select * from matakuliah");
                                
                                foreach ($query1 as $datas) : ?>
                                  <option <?php if( $datas['nama_matkul']== $data['nama_matkul']){echo "hidden"; } ?> value="<?= $datas['kodemk']?>"><?= $datas['nama_matkul']?></option>
                              <?php endforeach; ?>
                        </select> 
                    </div>
                    <div class="text-start">
                      <button type="submit" name="submit" class="btn btn-success btn-block" name="update">
                        Tambah
                      </button>
                    </div>
                  </form>

                </div>
        </div>
</body>
</html>
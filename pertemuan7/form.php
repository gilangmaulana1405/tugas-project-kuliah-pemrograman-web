<?php 
include 'koneksi.php';
$nama_mhs = mysqli_query($koneksi, "select * from mahasiswa");
$matkul = mysqli_query($koneksi, "select * from matakuliah");
?>

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

        <!-- form input data -->
        <div class="container">
            <div class="row d-flex justify-content-center mt-5">
                <div class="col-6">
                    <h3 class="text-center">Form Input KRS</h3>
                   <form class="form-container" action="proses.php" method="POST">
                    <div class="mb-2">
                      <label for="npm" class="form-label">Mahasiswa</label>
                      <select class="form-select" name="mahasiswa_npm" id="mahasiswa_npm">
                          <option disabled selected>Pilih Mahasiswa</option>
                              <?php foreach($nama_mhs as $nama) : ?>
                                  <option value="<?= $nama['npm'] ?>"><?= $nama['nama_mahasiswa'] ?></option>
                              <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-2">
                      <label for="matakuliah" class="form-label">Mata Kuliah</label>
                        <select class="form-select" name="matakuliah_kodemk" id="matakuliah_kodemk">
                                    <option disabled selected>Pilih Mahasiswa</option>
                                        <?php foreach($matkul as $mk) : ?>
                                            <option value="<?= $mk['kodemk'] ?>"><?= $mk['nama_matkul'] ?></option>
                                        <?php endforeach; ?>
                                </select> 
                    </div>
                    <div class="text-end">
                      <button type="submit" name="submit" class="btn btn-success btn-block">
                        Tambah
                      </button>
                    </div>
                  </form>

                </div>
        </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Style CSS -->
        <link rel="stylesheet" href="../assets/style.css" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous" />

        <title>Rest API</title>
    </head>

    <body>

    <?php
    include "../database/koneksi.php";
    $koneksi = mysqli_query($conn, "SELECT * FROM pegawai"); 
    
    $data = [];
    while($row = mysqli_fetch_assoc($koneksi)){
        $data[] = $row;
    }
    ?>

    
        <!-- Content -->
        <section class="content">
            <div class="container mt-3">
                <div class="text-center">
                    <h2>Data Pegawai</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-10">

                        <div class="text-end">
                            <a href="add_pegawai.php" class="btn btn-primary">
                                Tambah Data
                            </a>
                        </div>
                    </div>
                   <div class="col-10">
                        <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NIP</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $no = 1; foreach ($data as $d) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $d['nip']; ?></td>
                                    <td><?= $d['nama']; ?></td>
                                    <td><?= $d['alamat']; ?></td>
                                    <td>
                                        <a href="edit_mahasiswa.php?id=<?=$d['id']?>"
                                            class="btn btn-warning">Update</a>
                                        <a href="proses.php?id=<?= $d['id']?>"
                                            onclick="return confirm('yakin ingin dihapus?')"
                                            class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                   </div>
                </div>
            </div>
        </section>
        <!-- EndContent -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
    </body>

    </html>
</body>

</html>
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

        <!-- Content -->
        <section class="content">
            <div class="container mt-5">
                <div class="text-center">
                    <h2>Tambah Pegawai</h2>
                </div>
                <div class="data">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-12">
                           
                            <form class="form-container" action="actionAdd.php" method="POST"
                                enctype="multipart/form-data">
                                <div class="mb-2">
                                    <label for="nip" class="form-label">NIP</label>
                                    <input type="text" class="form-control" id="nip" name="nip"
                                        placeholder="Masukkan nip" />
                                </div>
                                <div class="mb-2">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Masukkan Nama" />
                                </div>
                                <div class="mb-2">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                        placeholder="Masukkan alamat" />
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary btn-block" name="submit">
                                        Tambah
                                    </button>
                                </div>
                                 <div class="text-start">
                                    <a href="pegawai.php" class="btn btn-success">
                                        Kembali
                                    </a>
                                </div>
                            </form>
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
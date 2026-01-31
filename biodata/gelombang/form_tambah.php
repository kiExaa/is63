<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gelombang Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body style="background-color:#d1e6d4">
    <?php
    include_once("../navbar.php");
    ?>

    <div class="container">
        <div class="row my-5">
            <div class="col-8 m-auto">
                <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
                    <div class="card-header">
                        <b>FORM Gelombang Pendaftaran Siswa</b>
                    </div>
                    <div class="card-body">
                        <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
                             <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal Pendaftaran</label>
                                <input name="tgl_gel" type="date" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Gelombang Pendaftaran</label>
                                <select class="form-control" name="gelombang" id="">
                                    <option value="">-Pilih Gelombang-</option>
                                    <option value="Gelombang 1">Gelombang 1</option>
                                    <option value="Gelombang 2">Gelombang 2</option>
                                    <option value="Gelombang 3">Gelombang 3</option>
                                    <option value="Gelombang 4">Gelombang 4</option>
                                    <option value="Gelombang 5">Gelombang 5</option>
                                </select>
                            </div>
                            <!-- <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                                <select class="form-control" name="kode" id="">
                                    <option value="">-Pilih Jurusan-</option>
                                    <option value="IK">IK</option>
                                    <option value="SK">SK</option>
                                    <option value="OM">OM</option>
                                    <option value="KA">KA</option>
                                    <option value="DBC">DBC</option>
                                </select> -->
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>
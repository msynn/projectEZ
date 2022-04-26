<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        button {
            height: 35px;
            font-weight: 100;
            width: 100px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <center><h1>EDIT DATA MAHASISWA</h1></center>
<table>
    <div class="row justify-content-center">
        <div class="col-md-4">
    <form action="database/tampungan.php" method="POST">
        <div class="col-mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" aria-describedby="name" value="<?php echo($data["nama"]);?>" hidden="True">
        </div>
        <div class="col-mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" value="<?php echo($data["nim"]);?>" hidden="True">
        </div>
        <div class="col-mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" class="form-control" id="kelas" aria-describedby="kelas" name="kelas" value="<?php echo($data["kelas"]);?>" hidden="True">
        </div>
        <div class="col-mb-3">
            <label for="angkatan" class="form-label">Angkatan</label>
            <input type="number" class="form-control" id="angkatan" aria-describedby="angkatan" name="angkatan"value="<?php echo($data["angkatan"]);?>" hidden="True">
        </div>
        <center>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </center>
        </div>
    </form>
    </div>
    <div><center><a href="cek_data.php"><button class="btn btn-danger">View</button></a></center></div>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
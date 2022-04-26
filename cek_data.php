<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style></style>
    <title>Data Mahasiswa</title>
  </head>
  <body>
    <div class="container col-md-10">
        <div class="card-header bg-warning text-white text-center mb-2">
            <h3>DATA MAHASISWA</h3> <h6>Jago ngoding</h6>
        </div>

        <table class="table table-bordered border-dark">
    <thead>
        <tr class="table-info tabel-bordered border-dark table-striped">
        <th scope="col">Nama</th>
        <th scope="col">Nim</th>
        <th scope="col">Kelas</th>
        <th scope="col">Angkatan</th>
        <th scope="col">Menu</th>
        </tr>
    </thead>
    <tbody>
    <?php
                include "database/koneksi.php";

                $query = "SELECT * FROM mhs_db";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0){
                    while($data = mysqli_fetch_assoc($result)) {?>
                        <tr>
                            <td><?php echo $data["nama"]?></td>
                            <td><?php echo $data["nim"]?></td>
                            <td><?php echo $data["kelas"]?></td>
                            <td><?php echo $data["angkatan"]?></td>
                            <td>
                                
                                <a href="edit-mhs.php?nim=<?php echo $data["nim"] ?>"><button class="bg-danger text-light">edit</button></a>
                            </td>
                        </tr>
                    <?php }
                }else {?>
                    <tr>
                        <div class="container bg-primary text-light">
                            <td>Tidak ada Data</td>
                        </div>
                    </tr>
                <?php } ?>
        </table>
    </tbody>
    </table>
</div>


    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php
  $nama     = $_POST['nama'];
  $nim      = $_POST['nim'];
  $kelas    = $_POST['kelas'];
  $angkatan = $_POST['angkatan'];

  include 'koneksi.php';

  $sql = "INSERT INTO mhs_db VALUES ('$nama', '$nim', '$kelas', '$angkatan')";

  if (mysqli_query($conn, $sql)) {
    echo "Data Berhasil disimpan!";
    echo "<br>";
    echo "<a href='../input.php'>Kembali</a>";
  }else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
?>
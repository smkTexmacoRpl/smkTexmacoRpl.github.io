<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $data = json_decode(file_get_contents("data.json"), true);
 if (!$data) $data = [];

 $baru = [
  "nama" => $_POST['nama'],
  "kelas" => $_POST['kelas'],
  "jurusan" => $_POST['jurusan']
 ];

 $data[] = $baru;
 file_put_contents("data.json", json_encode($data, JSON_PRETTY_PRINT));

 header("Location: index.php");
 exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
 <div class="container mt-4">
  <div class="card col-md-6 mx-auto">
   <div class="card-body shadow-lg">
    <a href="index.php" class="btn btn-secondary">&larr; Kembali</a>
    <h2>Tambah Siswa</h2>
    <form method="POST">
     Nama: <input type="text" name="nama" class="form-control" required><br>
     Kelas: <input type="text" name="kelas" class="form-control" required><br>
     Jurusan: <input type="text" name="jurusan" class="form-control" required><br>
     <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
   </div>

  </div>




 </div>
</body>

</html>
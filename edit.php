<?php
$data = json_decode(file_get_contents("data.json"), true);
if (!$data) $data = [];

$id = $_GET['id'];
$s = $data[$id];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $data[$id]['nama'] = $_POST['nama'];
 $data[$id]['kelas'] = $_POST['kelas'];
 $data[$id]['jurusan'] = $_POST['jurusan'];
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
    <h2>Edit Siswa</h2>
    <form method="POST">
     Nama: <input type="text" name="nama" value="<?= $s['nama'] ?>" class="form-control" required><br>
     Kelas: <input type="text" name="kelas" value="<?= $s['kelas'] ?>" class="form-control" required><br>
     Jurusan: <input type="text" name="jurusan" value="<?= $s['jurusan'] ?>" class="form-control" required><br>
     <button type="submit" class="btn btn-primary">Update</button>
    </form>
   </div>
  </div>
 </div>
</body>

</html>
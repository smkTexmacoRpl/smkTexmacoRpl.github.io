<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <style>
  table {
   border-collapse: collapse;
  }

  th,
  td {
   padding: 8px 12px;
  }
 </style>
</head>

<body>

 <?php
 // Ambil data dari file JSON
 $data = json_decode(file_get_contents("data.json"), true);
 if (!$data) $data = [];
 ?>
 <div class="container mt-4">
  <h2>Data Siswa</h2>
  <a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Siswa</a>
  <table class="table table-bordered">
   <thead>
    <tr>
     <th>No</th>
     <th>Nama</th>
     <th>Kelas</th>
     <th>Jurusan</th>
     <th>Aksi</th>
    </tr>
    <?php $no = 1;
    foreach ($data as $i => $s): ?>
     <tr>
      <td><?= $no++ ?></td>
      <td><?= $s['nama'] ?></td>
      <td><?= $s['kelas'] ?></td>
      <td><?= $s['jurusan'] ?></td>
      <td>
       <a href="edit.php?id=<?= $i ?>">Edit</a> |
       <a href="hapus.php?id=<?= $i ?>">Hapus</a>
      </td>
     </tr>
    <?php endforeach ?>
  </table>
 </div>
</body>

</html>
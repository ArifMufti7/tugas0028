<?php 
include 'database.php';
$db = new Database;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $dataUser = $db->detail($id); // Asumsi fungsi getDataById ada di database.php
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-3">
    <h1>Detail User</h1>
    <hr>

    <!-- Card untuk menampilkan detail user -->
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="https://via.placeholder.com/150" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?php echo $dataUser['nama']; ?></h5>
            <p class="card-text">
                <strong>Alamat:</strong> <?php echo $dataUser['alamat']; ?><br>
                <strong>No HP:</strong> <?php echo $dataUser['nohp']; ?>
            </p>
            <p class="card-text"><small class="text-body-secondary">Last updated just now</small></p>
          </div>
        </div>
      </div>
    </div>

    <a href="index.php" class="btn btn-primary">Kembali</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

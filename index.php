<?php 
include 'database.php';
$db = new Database;
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD OOP PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3">
        <h1>CRUD OOP PHP</h1>
        <hr>

        <!-- Notifikasi -->
        <?php 
        session_start();
        if (isset($_SESSION['message'])): ?>
            <div class="alert alert-<?php echo $_SESSION['msg_type']; ?> alert-dismissible fade show" role="alert">
                <?php echo $_SESSION['message']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php 
            unset($_SESSION['message']); // Hapus pesan setelah ditampilkan
        endif;
        ?>
        
        <!-- Tombol tambah data  -->
        <a href="input.php" class="btn btn-success">Tambah Data</a>
        <hr>
        
        <!-- Tabel untuk menampilkan data user  -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $nomor = 1;
                    foreach ($db->tampilData() as $dataUser) {                                  
                ?>
                <tr>
                    <th scope="row"><?php echo $nomor++; ?></th>
                    <td><?php echo $dataUser['nama']; ?></td>
                    <td><?php echo $dataUser['alamat']; ?></td>
                    <td><?php echo $dataUser['nohp']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $dataUser['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <!-- Tambahkan konfirmasi sebelum hapus -->
                        <a href="proses.php?id=<?php echo $dataUser['id'] ?>&aksi=hapus" 
   class="btn btn-danger btn-sm"
   onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
   <a href="detail.php?id=<?php echo $dataUser['id'] ?>" class="btn btn-warning btn-sm">Detail</a>

                    </td>
                </tr>
                <?php 
                }  
                ?>
            </tbody>
        </table>
    </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

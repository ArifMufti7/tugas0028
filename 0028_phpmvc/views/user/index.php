<!-- views/user/index.php -->
<?php include 'views/templates/header.php'; ?>

<div class="container mt-5">
    <h2>Daftar Users</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user['id']); ?></td>
                    <td><?= htmlspecialchars($user['name']); ?></td>
                    <td><?= htmlspecialchars($user['email']); ?></td>
                    <td>
                        <a href="/belajar-mvc/detail/<?= $user['id']; ?>" class="btn btn-info btn-sm">Detail</a>
                        <a href="/belajar-mvc/edit/<?= $user['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/belajar-mvc/delete/<?= $user['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'views/templates/footer.php'; ?>

<!-- views/user/detail.php -->
<?php include 'views/templates/header.php'; ?>

<div class="container mt-5">
    <h2>Detail User</h2>
    <?php if ($user): ?>
        <ul class="list-group">
            <li class="list-group-item"><strong>ID:</strong> <?= htmlspecialchars($user['id']); ?></li>
            <li class="list-group-item"><strong>Nama:</strong> <?= htmlspecialchars($user['name']); ?></li>
            <li class="list-group-item"><strong>Email:</strong> <?= htmlspecialchars($user['email']); ?></li>
        </ul>
    <?php else: ?>
        <p>User tidak ditemukan.</p>
    <?php endif; ?>
</div>

<?php include 'views/templates/footer.php'; ?>

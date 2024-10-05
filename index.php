<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Pembelian</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="text-center">Hitung Total Pembelian</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="is_member" class="form-label">Status Pembeli</label>
                                <select class="form-select" name="is_member" id="is_member" required>
                                    <option value="1">Member</option>
                                    <option value="0">Bukan Member</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="total_belanja" class="form-label">Total Belanja (Rp)</label>
                                <input type="number" class="form-control" name="total_belanja" id="total_belanja" placeholder="Masukkan total belanja" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Hitung</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['is_member']) && isset($_POST['total_belanja'])) {
                            $is_member = $_POST['is_member'];
                            $total_belanja = $_POST['total_belanja'];

                            // Fungsi untuk menghitung diskon
                            function hitungDiskon($is_member, $total_belanja)
                            {
                                $diskon_member = 0.10; // Diskon 10% untuk member
                                $diskon = 0;

                                if ($is_member) {
                                    // Jika pembeli adalah member
                                    if ($total_belanja >= 500000) {
                                        $diskon = $diskon_member + 0.10; // Tambah potongan 10%
                                    } elseif ($total_belanja >= 300000) {
                                        $diskon = $diskon_member + 0.05; // Tambah potongan 5%
                                    } else {
                                        $diskon = $diskon_member; // Hanya diskon member 10%
                                    }
                                } else {
                                    // Jika pembeli bukan member
                                    if ($total_belanja >= 500000) {
                                        $diskon = 0.10; // Diskon 10% untuk non-member
                                    }
                                }

                                return $diskon;
                            }

                            // Fungsi untuk menghitung total harga setelah diskon
                            function hitungTotalHarga($total_belanja, $diskon)
                            {
                                return $total_belanja - ($total_belanja * $diskon);
                            }

                            // Hitung diskon dan total harga
                            $diskon = hitungDiskon($is_member, $total_belanja);
                            $total_harga = hitungTotalHarga($total_belanja, $diskon);
                            $jumlah_diskon = $total_belanja * $diskon;

                            // Menampilkan hasil
                            echo "<div class='alert alert-info'>Kamu Mendapat Diskon: Rp " . number_format($jumlah_diskon, 2, ',', '.') . "</div>";
                            echo "<div class='alert alert-success'>Total Bayar: Rp " . number_format($total_harga, 2, ',', '.') . "</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
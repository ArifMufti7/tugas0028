<?php 
include 'database.php';
$db = new Database();

$aksi = $_GET['aksi'];

session_start(); // Memulai session

if ($aksi == "tambah") {
    // Proses tambah data
    $db->tambahData($_POST['nama'], $_POST['alamat'], $_POST['nohp']);
    $_SESSION['message'] = "Data berhasil ditambahkan!";
    $_SESSION['msg_type'] = "success"; // Tipe pesan sukses
    header("location:index.php");
} elseif ($aksi == "update") {
    // Proses update data
    $db->updateData($_POST['id'], $_POST['nama'], $_POST['alamat'], $_POST['nohp']);
    $_SESSION['message'] = "Data berhasil diupdate!";
    $_SESSION['msg_type'] = "success"; // Tipe pesan sukses
    header("location:index.php");
} elseif($aksi == "hapus"){
    // Proses hapus data
    $db->hapusData($_GET['id']);
    $_SESSION['message'] = "Data berhasil dihapus!";
    $_SESSION['msg_type'] = "danger"; // Tipe pesan hapus
    header("location:index.php");
}
?>

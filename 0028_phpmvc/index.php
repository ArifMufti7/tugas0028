<?php
// index.php
require 'controllers/UserController.php';

// Koneksi ke database
$db = new PDO('mysql:host=localhost;dbname=belajar_mvc', 'root', '');

// Inisialisasi controller
$userController = new UserController($db);

// Routing
$path = $_SERVER['REQUEST_URI'];

if ($path == '/belajar-mvc/' || $path == '/belajar-mvc/index.php') {
    $userController->index();
} elseif (preg_match('/\/belajar-mvc\/detail\/(\d+)/', $path, $matches)) {
    $userController->detail($matches[1]);
} else {
    echo "404 Not Found";
}
?>


<?php
class Buah {
    protected $nama;

    function gantinama($namabuah) {
        $this->nama = $namabuah;
    }

    function tampilannama() {
        echo $this->nama;
    }
}

class Apel extends Buah {
    function tampildata() {
        echo $this->nama;
    }
}

$apel = new Apel();
$apel->gantinama("APEL BANDUNG"); // Menggunakan metode gantinama untuk mengatur nama
$apel->tampildata(); // Memanggil metode untuk menampilkan nama
?>
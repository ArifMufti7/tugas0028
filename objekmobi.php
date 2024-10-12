<?php
// Definisi kelas Mobil
class Mobil {
  // Properti kelas Mobil
  public $nama;
  public $merk;
  public $warna;
  public $tahun;
  public $kecepatanMaksimal;

  // Konstruktor kelas Mobil
  public function __construct($nama, $merk, $warna, $tahun, $kecepatanMaksimal) {
    $this->nama = $nama;
    $this->merk = $merk;
    $this->warna = $warna;
    $this->tahun = $tahun;
    $this->kecepatanMaksimal = $kecepatanMaksimal;
  }

  // Method untuk menampilkan informasi mobil
  public function tampilkanInfo() {
    echo "Nama: " . $this->nama . PHP_EOL;
    echo "Merk: " . $this->merk . PHP_EOL;
    echo "Warna: " . $this->warna . PHP_EOL;
    echo "Tahun: " . $this->tahun . PHP_EOL;
    echo "Kecepatan Maksimal: " . $this->kecepatanMaksimal . PHP_EOL;
  }
}

// Membuat objek mobilSatu
$mobilSatu = new Mobil("Avanza", "Toyota", "Hitam", 2019, 1300);

// Menampilkan informasi objek mobilSatu
echo "Informasi Mobil Satu:" . PHP_EOL;
$mobilSatu->tampilkanInfo();

// Membuat objek mobilDua
$mobilDua = new Mobil("Brio", "Honda", "Merah", 2018, 1000);

// Menampilkan informasi objek mobilDua
echo "Informasi Mobil Dua:" . PHP_EOL;
$mobilDua->tampilkanInfo();

?>
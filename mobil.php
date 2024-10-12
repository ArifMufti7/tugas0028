<?php
class Mobil {
  public $nama;
  public $merk;
  public $warna;
  public $tahun;
  public $kecepatanMaksimal;

  public function __construct($nama, $merk, $warna, $tahun, $kecepatanMaksimal) {
    $this->nama = $nama;
    $this->merk = $merk;
    $this->warna = $warna;
    $this->tahun = $tahun;
    $this->kecepatanMaksimal = $kecepatanMaksimal;
  }

  public function tambahKecepatan(): void {
    echo "Kecepatan bertambah!!";
  }
}

// Inisialisasi objek mobilSatu
$mobilSatu = new Mobil("Avanza", "Toyota", "Hitam", 2019, 1300);

// Menampilkan informasi objek mobilSatu
echo "Nama: " . $mobilSatu->nama . PHP_EOL;
echo "Merk: " . $mobilSatu->merk . PHP_EOL;
echo "Warna: " . $mobilSatu->warna . PHP_EOL;
echo "Tahun: " . $mobilSatu->tahun . PHP_EOL;
echo "Kecepatan Maksimal: " . $mobilSatu->kecepatanMaksimal . PHP_EOL;
$mobilSatu -> tambahKecepatan();
echo "<br/>";
// Inisialisasi objek mobilDua
$mobilDua = new Mobil("Brio", "Honda", "Merah", 2018, 1000);

// Menampilkan informasi objek mobilDua
echo "Nama: " . $mobilDua->nama . PHP_EOL;
echo "Merk: " . $mobilDua->merk . PHP_EOL;
echo "Warna: " . $mobilDua->warna . PHP_EOL;
echo "Tahun: " . $mobilDua->tahun . PHP_EOL;
echo "Kecepatan Maksimal: " . $mobilDua->kecepatanMaksimal . PHP_EOL;
?>
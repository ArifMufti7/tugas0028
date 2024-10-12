<?php

class Mahasiswa {
  // Properties
  private $nama;
  private $nim;
  private $jurusan;
  private $tahunAngkatan;
  private $ipk; // IPK (Indeks Prestasi Kumulatif)
  private $mataKuliah; // array 

  // Constructor
  public function __construct($nama, $nim, $jurusan, $tahunAngkatan) {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;
    $this->tahunAngkatan = $tahunAngkatan;
    $this->ipk = 4.0; // IPK  0.0
    $this->mataKuliah = array(); // array 
  }

  // Functions
  public function getNama() {
    return $this->nama;
  }

  public function getNim() {
    return $this->nim;
  }

  public function getJurusan() {
    return $this->jurusan;
  }

  public function getTahunAngkatan() {
    return $this->tahunAngkatan;
  }

  public function getIpk() {
    return $this->ipk;
  }

  public function getMataKuliah() {
    return $this->mataKuliah;
  }

  public function setNama($nama) {
    $this->nama = $nama;
  }

  public function setNim($nim) {
    $this->nim = $nim;
  }

  public function setJurusan($jurusan) {
    $this->jurusan = $jurusan;
  }

  public function setTahunAngkatan($tahunAngkatan) {
    $this->tahunAngkatan = $tahunAngkatan;
  }

  public function addMataKuliah($mataKuliah) {
    $this->mataKuliah[] = $mataKuliah;
  }

  public function calculateIpk($nilai) {
    $this->ipk = ($this->ipk + $nilai) / count($this->mataKuliah);
  }

  public function displayInfo() {
    ?>
    <table border="1">
      <tr>
        <th>Nama</th>
        <td><?= $this->nama ?></td>
      </tr>
      <tr>
        <th>NIM</th>
        <td><?= $this->nim ?></td>
      </tr>
      <tr>
        <th>Jurusan</th>
        <td><?= $this->jurusan ?></td>
      </tr>
      <tr>
        <th>Tahun Angkatan</th>
        <td><?= $this->tahunAngkatan ?></td>
      </tr>
      <tr>
        <th>IPK</th>
        <td><?= number_format($this->ipk, 2) ?></td>
      </tr>
      <tr>
        <th>Mata Kuliah</th>
        <td>
          <ul>
            <?php foreach ($this->mataKuliah as $mk) { ?>
              <li><?= $mk ?></li>
            <?php } ?>
          </ul>
        </td>
      </tr>
    </table>
    <?php
  }
}

// Create an object dari the Mahasiswa class
$mahasiswa1 = new Mahasiswa("Arif Miftahul Mufti", "23.240.0028", "Teknik Informatika", 2023);

//courses
$mahasiswa1->addMataKuliah("Pemrograman WEB 2");
$mahasiswa1->addMataKuliah("Pemrograman WEB 2");
$mahasiswa1->addMataKuliah("Pemrograman WEB 2");

//  IPK
$mahasiswa1->calculateIpk(10.0);
$mahasiswa1->calculateIpk(10.0);
$mahasiswa1->calculateIpk(7.0);

//  table
$mahasiswa1->displayInfo();

// Update properties
$mahasiswa1->setNama("Arif Miftahul Mufti");
$mahasiswa1->setJurusan("Teknik Informatika");

// Display updated table
$mahasiswa1->displayInfo();

?>
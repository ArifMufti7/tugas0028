<?php
    class buah {
        //property
        public $nama;
        public $warna;

        function deskripsibuah(){
            echo "NAMA BUAH $this->nama MEMILIKI WARNA $this->warna";
        }
    }
    //membuat objek mangga
    $mangga = new buah();
    $mangga->nama = "HARUMANIS";
    $mangga->warna = "HIJAU";
    //mengakses function
    echo $mangga->deskripsibuah();
?>
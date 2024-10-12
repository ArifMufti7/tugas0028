<?php
    class buah{
        //property
        public $nama;
        public $warna;

    }
    class pisang extends buah {
        function deskripsibuah(){
            echo "NAMA BUAH $this->nama DAN WARNA $this->warna";
        }
    }
    
    $objekpisang = new pisang();
    $objekpisang->nama = "PISANG RAJA";
    $objekpisang->warna = "KUNING";
    $objekpisang->deskripsibuah();
?>
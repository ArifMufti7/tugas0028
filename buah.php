<?php
class buah{
public $nama ;
public $warna ;

}
$pisang = new buah ();
$pisang -> nama = "Pisang Hijau ";
$pisang -> warna = " Hijau ";


$mangga = new buah ();
$mangga -> nama = " mangga Hijau ";
$mangga -> warna = " Hijau ";

echo $pisang -> nama;
echo "<br/>";
echo $pisang -> warna;

echo $mangga-> nama;
echo "<br/>";
echo $mangga -> warna;


?>
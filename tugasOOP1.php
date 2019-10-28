<?php

class aritmatika{

public $bil1;
public $bil2;

public function tambah($a,$b)
{
	$this->bil1=$a;
	$this->bil2=$b;
	return "Perhitungan Tambah $a + $b : " . ($a + $b);
}
public function kurang($a,$b)
{
	$this->bil1=$a;
	$this->bil2=$b;
	return "Perhitungan Kurang $a - $b : " . ($a - $b);
}
public function kali($a,$b)
{
	$this->bil1=$a;
	$this->bil2=$b;
	return "Perhitungan Kali $a * $b : " . ($a * $b);
}
public function bagi($a,$b)
{
	$this->bil1=$a;
	$this->bil2=$b;
	return "Perhitungan Bagi $a / $b : " . ($a / $b);
}
}
$arit=new aritmatika();
echo $arit->tambah(20,10);
echo "<br>". $arit->kurang(200,150);
echo "<br>". $arit->kali(21,9);
echo "<br>". $arit->bagi(200,100);
echo "<hr>";

$arit1=new aritmatika();
echo $arit1->tambah(50,2000);
echo "<br>". $arit1->kurang(2000,1900);
echo "<br>". $arit1->kali(20,75);
echo "<br>". $arit1->bagi(20000,100);
echo "<hr>";
 ?>

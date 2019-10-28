<?php 
class bangundatar {

	public $alas,$tinggi;

	public function __construct($a,$b)
	{
		$this->alas=$a;
		$this->tinggi=$b;
	}
	public function luassegitiga()
	{
		return "<b><center>Luas Segitiga</center></b><br>";
	}
}
$aceng = new bangundatar(20,7);
echo $aceng->luassegitiga().
	" Alas nya : $aceng->alas<br>
	Tinggi nya  : $aceng->tinggi<br>
	Perhitungan luas Segitiga :".$aceng->alas * $aceng->tinggi / 2;
	echo "<hr>";


class bangunruang {

	public $phi=3.14,$jari;

	public function __construct($b)
	{
		$this->jari=$b;
	}
	public function luaslingkaran()
	{
		return "<b><center>Luas Lingkaran & Keliling lingkaran</center></b><br>";
	}
}
$aceng1 = new bangunruang(20);
echo $aceng1->luaslingkaran().
	" V nya : $aceng1->phi<br>
	Jari-Jari  : $aceng1->jari<br>
	Perhitungan luas lingkaran :".$aceng1->phi * $aceng1->jari * $aceng1->jari . 
	"<br>Perhitungan Keliling Lingkaran :" . 2 * ($aceng1->phi * $aceng1->jari);
	echo "<hr>";
	
 ?>

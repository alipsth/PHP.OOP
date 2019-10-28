<!DOCTYPE html>
<html>
<head>
	<title>Luas Lingkaran</title>
</head>
<body>
	<form action="" method="POST">
		<font style="font-family: kristen itc">
		<b><center>Luas Lingkaran & Keliling lingkaran</center></b><br>
<div class="form-gruop">
	<label>Jari-Jari :</label>
	<input type="number" name="jari" class="form-control">
</div>
<?php 
	if (isset($_POST['simpan'])) {
		$jarii=$_POST['jari'];
class lingkaran{
	public $phi=3.14,$jari;

	public function __construct($b)
	{
		$this->jari=$b;
	}
	public function luas()
	{
		$luas=$this->phi * $this->jari * $this->jari;
		return $luas;
	}
}
	$lingkaran1 = new lingkaran($jarii);
	echo "<br>Jari-Jari nya   :".$lingkaran1->jari;
	echo "<br>Luas Lingkarannya :".$lingkaran1->luas();
	echo "<br>Luas Keliling Lingkaran :". 2 * ($lingkaran1->phi * $lingkaran1->jari);
	}
	echo "<hr>";
 ?>
 <b><center>Luas Segitiga</center></b><br>
 	<label>Alasnya :</label>
 		<input type="number" name="alas" class="form-control">
 	<label >Tingginya :</label>
 		<input type="number" name="tinggi" class="form-control"><br>
 		<br>
		<button type="submit" name="simpan">Simpan</button><br>
 			<?php 
 			if (isset($_POST['simpan'])) {
 				$alas=$_POST['alas'];
 				$tinggi=$_POST['tinggi'];
 			class segitiga{
 				public $alas,$tinggi;

 				public function __construct($a,$b)
 				{
 					$this->alas=$a;
 					$this->tinggi=$b;
 				}
 				public function seluruh()
 				{
 					$seluruh=$this->alas * $this->tinggi/2;
 					return $seluruh;
 				}
 			}
 			$segitiga1= new segitiga($alas,$tinggi);
 			echo "<br>Alas Segitiganya :".$segitiga1->alas;
 			echo "<br>Tinggi segitinya :".$segitiga1->tinggi;
 			echo "<br>Hasilnya :".$segitiga1->seluruh();
 			}
 			 ?>
</form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<fieldset>
<pre>
	<?php 
	if (isset($_POST['simpan'])) {
		$nama=$_POST['nm'];
		$nip=$_POST['np'];
		$alamat=$_POST['almt'];
		$jumlah=$_POST['jml'];
class gaji{
	public $namaa,$nipp,$alamatt,$jumlahh;

	public function __construct($a,$b,$c,$d)
	{		
		$this->namaa=$a;
		$this->nipp=$b;
		$this->alamatt=$c;
		$this->jumlahh=$d;
	}
	public function data_diri()
	{
		return"Data Diri ";

	}
	public function gaji_kotor()
	{
		$z=$this->jumlahh * 75000;
		return $z;
	}
	public function gaji_bersih()
	{
		$gajibersih=($this->jumlahh * 75000) - ($this->jumlahh * 75000) * (2.5/100);
		return $gajibersih;
	}
}
	$data = new gaji($nama,$nip,$alamat,$jumlah);
	echo "Ini adalah  " .$data->data_diri()."<br>";
	echo "Nama :" . $data->namaa."<br>";
	echo "Nip  :" . $data->nipp."<br>";
	echo "Alamat :" . $data->alamatt."<br>";
	echo "Jumlah Hari :" . $data->jumlahh."<br>";
	echo "Gaji Kotor :" .$data->gaji_kotor()."<br>";
	echo "Gaji Bersih :" . $data->gaji_bersih()."<br>";
	}
 ?>
 </fieldset>
</body>
</html>


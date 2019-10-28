<!DOCTYPE html>
<html>
<head>
	<title>Luas Lingkaran</title>
</head>
<body>
	<form action="" method="POST">
		<font style="font-family: kristen itc">
		<b><center>Absensi Kelas XI RPL 2</center></b><br>
<div class="form-gruop">
	<label>Wali kelas :</label>
		<input type="text" name="wali" class="form-control">
	<label>Siswa yang Ijin  :</label>
		<input type="text" name="ijin" class="form-control">
	<label>Siswa yang Alpa  :</label>
		<input type="text" name="alpa" class="form-control">
	<label>Siswa yang Sakit :</label>
		<input type="text" name="sakit" class="form-control">
		<button type="submit" name="simpan">Simpan</button>
</div>
<?php 
	if (isset($_POST['simpan'])) {
		$wali=$_POST['wali'];
		$alpa=$_POST['alpa'];
		$sakit=$_POST['sakit'];
		$ijin=$_POST['ijin'];
class kelas{
	public $walii,$alpaa,$sakitt,$ijinn,$hadirr=32;

	public function __construct($a,$b,$c,$d)
	{	
		$this->walii=$a;
		$this->ijinn=$b;
		$this->alpaa=$c;
		$this->sakitt=$d;
	}
	public function nm_wali()
	{
		return"Nama wali kelas : $this->walii";
	}
	public function absensi()
	{
		return "Siswa yang Hadir :$this->hadirr";
	}
}
	$lingkaran1 = new kelas($wali,$ijin,$alpa,$sakit);
	echo "<br>".$lingkaran1->nm_wali();
	echo "<br>Siswa yang ijin    :".$lingkaran1->ijinn;
	echo "<br>Siswa yang alpa   :".$lingkaran1->alpaa;
	echo "<br>Siswa yang sakit  :".$lingkaran1->sakitt;
	echo "<br>".$lingkaran1->absensi();
	}
 ?>
</form>
</body>
</html>

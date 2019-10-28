<?php 
class siswa {

	public $nama,$alamat,$umur;

	public function __construct($a,$b,$c)
	{
		$this->nama=$a;
		$this->alamat=$b;
		$this->umur=$c;
	}
	public function datasiswa()
	{
		return "Hallo";
	}
}
$aceng = new siswa('Aceng Gerebek','Bojong loa',17);
echo $aceng->datasiswa().
	" Nama Saya : $aceng->nama<br>
	Alamat di  : $aceng->alamat<br>
	Umur saya  :$aceng->umur tahun";
 ?>

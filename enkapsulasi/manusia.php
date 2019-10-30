<?php 
class manusia{
	public $umur,$tgl_lahir;
	protected $jenis_kelamin;
	private $status;

	public function makan()
	 {
	 	return "Manusia juga butuh makan";
	 } 
	 public function minum()
	 {
	 	return "Manusia juga butuh minum";
	 }
	 public function ambil_status($status_saat_ini)
	 {
	 	return $this->status =$status_saat_ini;
	 }
	 public function status_gue()
	 {
	 	return "Barbar namun kadang santuy";
	 }
}
class pria extends manusia{

	public function jk($jk)
	{
		return $this->jenis_kelamin=$jk;
	}
	public function datadiri()
	{
		$datadiri ="<br> Aku Seorang" . $this->jenis_kelamin;
		$datadiri .="<br> Yang lahir pada" . $this->tgl_lahir;
		$datadiri .="<br> Sampai saat ini " . $this->status_gue();
		$datadiri .="<br> Karena saya masih" . $this->umur;
		$datadiri .="<br> Belum pantas untuk menikah<br>";
		return $datadiri; 
	}
}

$saya = new pria();
$saya->tgl_lahir="16 Januari 2003";
$saya->jk("laki-laki");
$saya->ambil_status("Duda Araban");
$saya->umur="35 Tahun";

echo $saya->datadiri();
echo $saya->makan();


 ?>

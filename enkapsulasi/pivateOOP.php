<?php 

// buat class komputer
class komputer{
// property dengan hak akses protected
private $jenis_procesor="Intel Core i7-4790 3.6Ghz";
public function tampilkan_procesor()
	{
		return $this->jenis_procesor;
	}
}

//buat class laptop
class laptop extends komputer{

public function tampilkan_procesor()
	{
		return $this->jenis_procesor;
	}
}

// buat objek dari class laptop (instansiasi)
$komputer_baru = new komputer();
$laptop_baru = new laptop ();
// jalankan mentod dari class komputer
echo $komputer_baru->tampilkan_procesor(); //Intel Core i7-4790 3.Ghz
// jalankan mentod dari class laptop (error)
echo $laptop_baru->tampilkan_procesor();

?>

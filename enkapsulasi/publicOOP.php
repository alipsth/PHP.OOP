<?php 
// buat class laptop
class laptop{

	public $pemilik;
	//buat public mentod
	public function hidupkan_laptop()
		{
			return"Hidupkan laptop";
		}
	}

	//Buat objek dari class laptop (instansiasi)
$laptop_anto= new laptop();
//set property
$laptop_anto->pemilik; // anto

//tampilkan mentod
echo $laptop_anto->hidupkan_laptop(); // Hidupkan lapto
 ?>

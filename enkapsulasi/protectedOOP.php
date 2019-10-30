<?php 
// buat class laptop
class laptop{

	protected $pemilik;
	//buat public mentod
	protected function hidupkan_laptop()
		{
			return"Hidupkan laptop";
		}
	}

	//Buat objek dari class laptop (instansiasi)
$laptop_anto = new laptop();
//set property
$laptop_anto->pemilik="anto";

echo $laptop_anto->pemilik;

//tampilkan mentod
echo $laptop_anto->hidupkan_laptop(); // Hidupkan lapto
 ?>

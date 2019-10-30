<?php 
 class smartphone{
 	public $user="Alipsth_";
 	protected $handphone="Redmi 9t";
 	private $harga1=5000000;

	public function harga()
	{
		return $this->harga1;
	}
}
class hp extends smartphone{
	public function type()
	{
		return $this->handphone;
	}

	public function harga()
	{
		return $this->harga1;
	}
	public function buka_pin()
	{
		return "Masukan Pola anda";
	}

}
 $smartphone2 = new smartphone();
 $smartphone1 = new hp();
 echo "<b>Public</b><br>";
 echo $smartphone1->user;
 echo "<br>".$smartphone1->buka_pin();
 echo "<hr>";
 echo "<b>Private</b><br>";
 echo "Harga smartphone anda :".$smartphone1->harga();
 echo "<hr>";
 echo "<b>Protected</b><br>";
 echo "Type smartphone anda Xiomi :".$smartphone1->type();
 ?>
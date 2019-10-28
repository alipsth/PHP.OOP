<?php 
class siswa{

	public function __destruct()
	{
		echo "<br> Ini adalah Destructor";
	}
	public function halo()
	{
		return "<br> Hello PHP";
	}
	public function __construct()
	{
		echo "Ini adalah Construct";
	}
}

$hallo = new siswa();
echo $hallo->halo();
 ?>

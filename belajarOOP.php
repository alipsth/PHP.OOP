<?php

class srigala {
public $warna   =' Abu-Abu';
public $kaki    = 4;
public $panjang =90.5;
public $makan   =true;


public function keliaran($var)
{
	return "Berkeliaran di malam hari" . $var;
}
public function berburu($var2)
{
	return "Hewan kecil seperti Rusa"  . $var2;
}
public function taring($var3)
{
	return "Mempunyai taring yang sangat panjang"  . $var3;
}
public function indra_penciuman($var4)
{
	return "Srigala mempunyai indra penciuman yang sangat tajam"  . $var4;
}
public function suara($var5)
{
	return "Aungan srigala sangat keras"  . $var5;
}
}
echo "<center><h4>Srigala Asli</h4></center>";
$srigala_asli =new srigala;
echo "Di hutan hiduplah seekor srigala berwarna<b>". $srigala_asli->warna . "</b><br>";
echo "Srigala mempunyai kaki :<b>" . $srigala_asli->kaki . "</b><br>";
echo "Panjang Srigala adalah :<b>" .$srigala_asli->panjang . "cm</b><br>";
echo "Srigala biasa <b>" .$srigala_asli->keliaran(' Untuk mencari makan</b><br>');
echo 'Srigala biasa berburu <b>' .$srigala_asli->berburu(' dan kambing atau hewan lainnya</b><br>');
echo '<b>' .$srigala_asli->taring(' dan tajam untuk menggigit mangsanya</b><br>');
echo '<b>' .$srigala_asli->indra_penciuman(' Mangsa tidak bisa besembunyi karena indra srigala</b><br>');
echo '<b>' .$srigala_asli->suara(' Hingga bisa mendatangkan teman teman nya</b><br>');
echo "<hr>";


echo "<center><h4>Srigala Palsu</h4></center>";
$srigala_palsu = new srigala;
echo "Di rumah hiduplah seekor srigala berwarna". $srigala_asli->warna = " Pink" . "<br>";
echo "Srigala mempunyai kaki :" . $srigala_asli->kaki  = 2 . "<br>";
echo "Panjang Srigala adalah :" .$srigala_asli->panjang = 25.9. "cm<br>";
echo "Srigala biasa " .$srigala_asli->keliaran(' Untuk mencari makan');
echo '<br>' .$srigala_asli->berburu(' dan kambing atau hewan lainnya');
echo '<br>' .$srigala_asli->taring(' dan tajam untuk menggigit mangsanya');
echo '<br>' .$srigala_asli->indra_penciuman(' Mangsa tidak bisa besembunyi karena indra srigala  ');
echo '<br>' .$srigala_asli->suara(' Hingga bisa mendatangkan teman teman nya');
 
 ?>	
<!DOCTYPE html>
<html>
<head>
	<title>Tugas Array</title>
</head>
<body>
	<fieldset>
		<pre>
			<?php 
			if (isset($_POST['sbm'])) {
				$nama = $_POST['nama'];
				$nik = $_POST['nik'];
				$alamat = $_POST['almt'];
				$umur = $_POST['umur'];


			class keluarga{

				public $namaa,$nikk,$alamatt,$umurr;

				public function __construct($a,$b,$c,$d)
				{
					$this->namaa=$a;
					$this->nikk=$b;
					$this->alamatt=$c;
					$this->umurr=$d;
				}
				public function my_family()
				{
					echo  "Ini Keluarga Bahagia <br>";
					foreach ($this->namaa as $data => $x) {
						echo "Nama   :" . $this->namaa[$data] . "<br>" .
						"Nik    :" . $this->nikk[$data] . "<br>" .
						"Alamat :" . $this->alamatt[$data] . "<br>" .
						"Umur   :" . $this->umurr[$data] . "<hr>";
				}
			}

		}
			$family=new keluarga($nama,$nik,$alamat,$umur);
			echo $family->my_family();
		}
			 ?>
		</pre>
	</fieldset>
</body>
</html>
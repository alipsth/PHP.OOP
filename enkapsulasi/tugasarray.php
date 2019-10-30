<html>
<head>
	<title>Form Array OOP</title>
</head>
<body>
	<form action="" method="GET" >
		<fieldset>
			<pre>
		Masukan Jumlah Keluarga :  <input type="number" min="1" name="data">
		<input type="submit" name="Simpan" value="Simpan">
		<hr>
	</form>
<form action="linktugasarray.php" method="POST">
   <?php 
	if (isset($_GET['Simpan'])) { 
		$data = $_GET['data'];
	for ($i=0; $i < $data ; $i++) { ?> 
		<label >NAMA   :</label><input type="text" name="nama[]" required><br>
		<label >NIK    :</label><input type="number" name="nik[]" required><br>
		<label >Alamat :</label><textarea name="almt[]" required></textarea><br>
		<label >UMUR   :</label><input type="number" name="umur[]" required><br>
		<hr>
	 <?php } ?>
		<input type="submit" name="sbm" value="Simpan">
	</form>
<?php } ?>
</pre>
</fieldset>
 </body>
 </html>
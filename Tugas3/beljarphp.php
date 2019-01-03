<html>
	<head>
		<title> Keluaran form </title>
</head>
<body align="center">
		<h3> DATA PENDAFTRAN </h3> <br>

		<?php
			echo "Nama : ".$_GET['nama']."</br>";
			echo "Password : ".$_GET['password']."</br>";
			echo "TTL : ".$_GET['tempat_lahir']."</br>";
			echo "Jenis kelamin : ".$_GET['sex']."</br>";
			echo "Agama : ".$_GET['agama']."</br>";
			echo "Keahlian : ".$_GET['keahlian']."</br>";
			echo "Deskripsi Diri : ".$_GET['deskripsi']."</br>";
	?>
</body>
</html>


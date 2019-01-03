<html>
	<head>
		<title>Output Form</title>
	</head>
	<body align="center"bg background = "image/awann.jpg">
		<h1>Data Pendaftar</h1></br>
	<font color ="black">
	<font face ="calibri">
	<font size ="5">
		<?php
			echo "Nama : ".$_GET['txtnama']."</br>";
			echo "TTL : ".$_GET['tempat_lahir']."</br>";
			echo "Jenis Kelamin : ".$_GET['sex']."</br>";
			echo "Agama : ".$_GET['agama']."</br>";
			echo "Keahlian : ".$_GET['keahlian']."</br>";
			echo "Deskripsi diri: ".$_GET['deskripsi']."</br>";
		?>
	</body>
</html>
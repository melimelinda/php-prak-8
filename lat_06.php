<!DOCTYPE html>
<html>
<head>
	<title>Penyisipan variabel pada html</title>
</head>
<body>
	Silahkan sebutkan warna kesukaan anda..?<br>
	<?php
	//berikut adalah inisiasi beberapa variabel
	$warna1 = "merah";
	$warna2 = "hijau";
	$warna3 = "kuning";
	?>
	<b>Dibawah ini adalah warna kesukaanku:<br>
		<?php
		print "$warna1, $warna2, $warna3</b>";
		?>
</body>
</html>
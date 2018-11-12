<!DOCTYPE html>
<html>
<head>
	<title>Struktur kendali IF...ELSE</title>
</head>
<body>
<?php
	$english = date("1");
	switch ($english)
	{
		case "Monday":
			$indonesian = "Senin";
			break;
		case "Tuesday":
			$indonesian = "Selasa";
			break;
		case "Wednesday":
			$indonesian = "Rabu";
			break;
		case "Thursday":
			$indonesian = "Kamis";
			break;
		case "Friday":
			$indonesian = "Jumat";
			break;
		case "Saturday":
			$indonesian = "Sabtu";
			break;
		Default:
			$indonesian = "Minggu";
	}
	echo "<h2>Hari ini adalah hari $indonesian</h2>";
?>

</body>
</html>
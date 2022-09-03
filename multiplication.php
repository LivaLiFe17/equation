<?php 
$fois = $_POST['fois'];
$multiple = $_POST['multiple'];

for ($i=0; $i <= $multiple; $i++) { 
	echo $fois ."fois". $i . " = " .$i * $fois ."<br>" ;// code...
}


 ?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="" method="POST">
		<label>Nombre</label>
		<input type="number" name="fois">
		<label>multiple</label>
		<input type="number" name="multiple">

		<input type="submit" name="">
	</form>
</body>
</html>
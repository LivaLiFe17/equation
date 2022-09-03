<?php 
$couleur =$_POST['couleur']; // alainy daholo aloha ny donnee rehetra; 
//var_dump($couleur);
switch ($couleur) {
	case 'red':
		echo "loko mena";// break manapaka ilay traitrement
		break;
	case 'blue':
		echo "loko manga";
		break;
	case 'cyan':
		echo "loko mangakely";
		break;
	case 'green':
		echo "loko maitso";
		break;		
	default: 
		echo "Erreur";//defeaut rehefa tsy ao anatin'ilay safidy ny clic
		break;
}
 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body style="background-color: <?php echo $couleur ?>;"> <!--lasa dynamique ny background ; miaraka page 1 ny php sy html izay vao mety ilay background dynamique ; DIA ILAY .PHP NO ANAMBARANA AZY-->

	<form action="exo2.php" method="POST">
		<select name="couleur">
			<option value="red">Mena</option>
			<option value="blue">Manga</option>
			<option value="cyan">Mangakely</option>
			<option value="green">Maitso</option>
		</select>
		<input type="submit" name="">
	</form>
</body>
</html>
<?php 
$nom = "RAJAONARIVELO";
//echo $nom." "."test";
 $table=[1,2,3,4];
 //var_dump($table); die; //die = tapitra ny traitement
echo $table[3];

$table_cle=["nom"=>"RAJAONARIVELO","Prenom"=>"Liva"];
//declaration table avec cle value 
var_dump($table_cle["nom"]); // afaka tonga dia antsoina eto ny cle

//var_dump fomba fijerena ny momba ilay variable

$nbr = 10;
if ($nbr > 18) {
	// afaka atao aminzay tiana oh nbr...
	echo "Majeur";
}
else{ 
	echo "Mineur";
}

//if elseif
$nbr1 = 2;
$nbr2 = 6;
$operation = "/";
if ($operation=="+" ) {
	// == mampitovy valeur === mampitovy valeur sy type (int, string....)
	echo $nbr1 + $nbr2;
}
elseif ($operation== "*") {
	echo $nbr1 * $nbr2;// code...

}
elseif ($operation == "-"){
	echo $nbr1 - $nbr2;
}
else {
	echo "Erreur";
}

 ?>


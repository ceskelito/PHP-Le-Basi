<?php

function printAssValue($associativeArray, $keyName, $arrayName = "myAss")
{
	echo "$arrayName". "[\"$keyName\"] = $associativeArray[$keyName]<br>";
}

function printArray($array, $arrayName)
{
	$i = 0;
	while($array[$i])
		echo "$arrayName"."[$i] = " . $array[$i++] . "<br>";
}

function printTitle($text, $n = 3)
{
	echo "<h$n>" . $text . "</h$n>";
}

function printBold($text, $newLine = 1)
{
	echo "<b>" . $text . "</b>";
	for($i = 0; $i < $newLine; $i++)
		echo "<br>";
}


/**************  Array Classico  ****************/

printTitle("Array classico");

// Dichiarazione e inizializzazione
$myArray = array(1, 2, "tre");

var_dump($myArray);
echo "<br><br>";

printBold("Utilizzando un ciclo while possiamo stampare i valori:");
printArray($myArray, "myArray");

echo "<br>-----------------------------------------------------------------------------------------------------";
/************  Array Associativo  **************/

printTitle("Array associativo");

// Dichiarazione e inizializzazione
$myAss = array(
	"zero" => 1,
	"uno" => 2,
	"due" => "terzo"
); // Non è necessario andare a capo così, ma può essere più chiaro 

var_dump($myAss);
echo "<br><br>";

printBold("Provando a fare un ciclo while non otterremo nulla:");
printArray($myAss, "myAss");

echo "<br>";
printBold("Dobbiamo invece esplicitare il nome della chiave:");
printAssValue($myAss, "zero");
printAssValue($myAss, "uno");
printAssValue($myAss, "due");

//echo "<br>-----------------------------------------------------------------------------------------------------<br>";

printBold("<br>Questo tipo di array può essere utile per salvare dei dati:");
$myCar = array("Brand" => "Ford", "Model" => "Fiesta" , "Year" => 2013);
printAssValue($myCar, "Brand", "myCar");
printAssValue($myCar, "Model", "myCar");
printAssValue($myCar, "Year", "myCar");

echo "<br>-----------------------------------------------------------------------------------------------------<br>";

printTitle("Altre proprietà degli array");

printBold(
	"Gli elementi degli array possono avere tipi discordanti,come abbiamo visto.<br>
	<br>
	Negli array associativi anche le chiavi possono essere di diversi tipi:"
);

$myNewAss = array("zero" => 1, 1 => "due", 2 => 3.1);
var_dump($myNewAss);

printBold("<br><br>Oppure si potrebbero mettere le chiavi solo su alcuni elementi (perfino negative):");
$myStrangeArray = array(1, 2, 3, 7 => "e gli altri indici do so finiti?", -1 => "cos?");
var_dump($myStrangeArray);

printBold(
	"<br><br>Insomma, il linguaggio php offre un alto grado di libertà e flessibilità,<br>
	e questi ultimi esempi ci hanno dimostrato come anche la distinzione tra array classico e<br>
	associativo sia puramente una formalità. Aspettatevi questa flessibilità durante tutto<br>
	lo studio del PHP."
);


?>

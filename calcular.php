<!DOCTYPE html>
<html>
    <body style="background-color:skyblue;">
    <body background="https://a-static.besthdwallpaper.com/cielo-de-nadie-videojuego-papel-pintado-1366x768-18552_46.jpg">
    <center>
        <h1>EL RESULTADO ES : </h1>
        
        <h1>
<?php
 
	require_once 'classes/Calculadora.php';

	$n1       = $_POST['n1'];
	$n2 	  = $_POST['n2'];
	$operacion = $_POST['operacion'];

	$calculadora = new Calculadora();

	//Setar valores

	$calculadora->setNum1($n1);
	$calculadora->setNum2($n2);

	switch ($operacion) {
		case 'sumar':
			$calculadora->sumar();
			break;

		case 'substraer':
			$calculadora->substraer();
			break;


		case 'multiplicar':
			$calculadora->multiplicar();
			break;


		case 'dividir':
			$calculadora->dividir();
			break;
	}

	echo $calculadora->getTotal();
        
        
       

?>
             
            
</center>
</h1>
<CENTER>
<?php echo '<h1> CALCULADORA EN PHP</h1>'?>
</CENTER>
<!DOCTYPE html>
<html>
    <body style="background-color:skyblue;">
    <center>
<head>
	<meta charset="utf-8">
<H3>
</head>
<body>
	<link rel="stylesheet" href="estilo.css"
<center>

	<form method="post" action="calcular.php">
            <label><br>
			Primer Número:
			<input type="text" name="n1">
                </label><br>

                <label><br>
			Segundo Número:
			<input type="text" name="n2">
		</label>
		
		<br><br><br>

		Operaciones:<br>
                <br>
		<label>
			<input type="radio" name="operacion" value="sumar">
			Sumar
		</label>

		<label>
			<input type="radio" name="operacion" value="substraer">
			Substraer
		</label>

		<label>
			<input type="radio" name="operacion" value="multiplicar">
			Multiplicar
		</label>

		<label>
			<input type="radio" name="operacion" value="dividir">
			Dividir
                </label><BR>

                <label><br>
			<input type="submit" value="Calcular!">
		</label>

	</form>
</h3>
</body>
</html>

</center>

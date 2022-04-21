<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<a href="index.php">Inicio</a>
		<h4>Conversión de Unidades</h4>
		<p>Por favor, ingresar los datos correspondientes:</p>
		<form name="formulario" action="converter.php" method="post">
			<label for="cantidad">Cantidad:</label>
			<input type="text" id="cantidad" name="cantidad">
			<label for="conversion">Convertir de:</label>
			<select name="conversion" id="conversion" >
				<option selected>Seleccione una opción</option>
				<option value="1">Mililitros a onzas fluidas</option>
				<option value="2">Metros a yardas</option>
				<option value="3">Gramos a libras</option>
				<option value="4">Celcius a Farenheit</option>
				<option value="5">Kilometros a millas</option>
				<option value="6">Pesos a libras estarlinas</option>
			</select>

			<input type="submit" value="Enviar">
			<br />
			<br /> <label for="resultado">El resultado de la conversión es: </label>
		</form>
	</body>
</html>

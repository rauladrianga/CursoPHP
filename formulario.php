<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/1999/xhtml">
<html lang="es" xlmns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>	
	<title>Formulario</title>
</head>		
<body>
<form id="registro" name="Registro" method="post" action="script_guarda.php">
	<p><label for="nombre">Nombre(s)</label>
	<input type="text" name="nombre" id="nombre"></p>
	<p><label for="correo"> E-mail </label>
	<input type="text" name="correo" id="correo"></p>
	<p><label for="pais">País</label>
		<select name="pais" id="pais">
			<option>Colombia</option>
			<option>Chile</option>
			<option>Ecuador</option>
			<option>México</option>
			<option>Argentina</option>
			<option>Perú</option>
			<option>Otro</option></p></select>
			<p><label for="password">Contraseña:</label>
			<input type="password" name="password" id="password"></p>
			<p><input type="submit" name="enviar" value="Enviar" id="enviar"></p>
			
			
		
</form>
</body>
</html>



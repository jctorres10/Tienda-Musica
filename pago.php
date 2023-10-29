<html>
<head>
	<title>Pago Boleto</title>
</head>

<body>
	<a href="index.php">Inicio</a> | <a href="versucursal.php">Ver Sucursales</a> | <a href="cerrarsesion.php">Cerrar Sesion</a>
	<br/><br/>

	<form action="pagoproceso.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID_Sucursal</td>
				<td><input type="number" name="id_pago"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="usuario"></td>
			</tr>
			<tr> 
				<td>Nombres</td>
				<td><input type="text" name="contrasenia"></td>
			</tr>
			<tr> 
				<td>A.Paterno</td>
				<td><input type="text" name="fecha"></td>
			</tr>
            <tr> 
				<td>A.Materno</td>
				<td><input type="text" name="num_tarjeta"></td>
			</tr>
            <tr> 
				<td>Telefono</td>
				<td><input type="number" name="anio"></td>
			</tr>
            <tr> 
				<td>Codigo Postal</td>
				<td><input type="number" name="mes"></td>
			</tr>
            <tr> 
				<td>Dirreccion</td>
				<td><input type="text" name="codigo"></td>
			</tr>
            <tr> 
				<td>Sector</td>
				<td><input type="text" name="tipo_tar"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="agregar" value="Agregar"></td>
			</tr>
		</table>
	</form>
</body>
</html>


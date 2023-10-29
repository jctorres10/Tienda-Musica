<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: iniciarsesion.php');
}
?>

<?php
//incluye el archivo de conexión a la base de datos
include_once("conexion.php");

//obtención de datos en orden descendente (primero la última entrada)
$result = mysqli_query($mysqli, "SELECT * FROM pago_boleto WHERE id=".$_SESSION['id']." ORDER BY id_pago DESC");
?>

<html>
<head>
	<title>Pagos</title>
</head>

<body>
	<a href="index.php">Inicio</a> | <a href="pago.php">Agregar Sucursal</a> | <a href="cerrarsesion.php">Cerrar Sesión</a>
	<br/><br/>
	
	<table width='95%' border=0>
		<tr bgcolor='#CCCCCC'>
            <td>id_Cliente</td>
            <td>Email</td>
            <td>Nombres</td>
			<td>A.Paterno</td>
			<td>A.Materno</td>
			<td>Telefono</td>
			<td>Codigo Postal</td>
            <td>Dirreccion</td>
			<td>Sector</td>

		</tr>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res['id_pago']."</td>";
            echo "<td>".$res['id']."</td>";
            echo "<td>".$res['usuario']."</td>";
            echo "<td>".$res['password']."</td>";
            echo "<td>".$res['fecha_pago']."</td>";
            echo "<td>".$res['num_tarjeta']."</td>";
			echo "<td>".$res['anio_vence']."</td>";
			echo "<td>".$res['mes_vence']."</td>";	
            echo "<td>".$res['codigo_segu']."</td>";
            echo "<td>".$res['tipo_tarjeta']."</td>";
			echo "<td><a href=\"editarpago.php?id_pago=$res[id_pago]\">Editar</a> | <a href=\"borrarpago.php?id_pago=$res[id_pago]\" onClick=\"return confirm('¿Estás seguro que quieres eliminarlo?')\">Eliminar</a></td>";		
		}
		?>
	</table>	
</body>
</html>

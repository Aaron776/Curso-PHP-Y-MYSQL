<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 

$nombre=$_REQUEST['nombre'];


$conexion=mysqli_connect("localhost","root","","testdb2") or die("Problemas con la Conexion");

$registros=mysqli_query($conexion,"SELECT * FROM estudiante WHERE Nombre='$nombre'") or die("Problemas con la consulta");

if ($datos=mysqli_fetch_array($registros)) {
	
?>

<form action="Modificar_Registros1.php" method="post">
	<label>Ingrese Nueva Calificacion: </label>
	<input type="number" name="newCal">
	<input type="hidden" name="nombre" value="<?php echo $nombre ?>">
	<button type="submit">Modificar</button>

</form>

<?php  
}else{
	echo "No existe ese registre";
}




mysqli_close($conexion);
?>

 </body>
</html>
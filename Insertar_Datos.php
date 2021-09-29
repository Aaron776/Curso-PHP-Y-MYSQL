<?php 
//Para recuperar la informacion del formulario usamos el lenguaje PHP lo referente a las matrices Post o Request (lo que aprendi en el curso PHP)
$nombre=$_REQUEST['nombre'];
$apellido=$_REQUEST['apellido'];
$calificacion=$_REQUEST['calificacion'];


$conexion=mysqli_connect("localhost","root","","testdb") or die("Problemas con la Conexion");

//Realizar la ejecucion de las Consultas: para poder hacer las consultas SQL en la funcion mysqli_query() en el segundo parametro dentro del aprentesis ponemos las consulta que queremos hacer (Insert,Delete,Update,etc)

mysqli_query($conexion,"INSERT INTO estudiante VALUES ('$nombre','$apellido',$calificacion)") or die("Problemas con la consulta");


//Una vex que enviamos nuestros datos a la base de datos con la Consulta INSERT podemos revisar en phpmyadmnin que ese registro se guardo correctamente en la tabla que queriamos












mysqli_close($conexion);
echo "Datos Guardados exitosamente!";




 ?>
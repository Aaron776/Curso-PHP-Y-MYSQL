<?php  
/*Funciones para conectar PHP con MYSQL
- mysqli_connect(): esta funcion permite realizar la conexion con el servicio SQL de nuestro servidor y dentro del parentesis van a ir tres parametre: el servidor (IP), usuario(root), nombre de la base de datos

Esta funcion nos delvolvera la conexion y para esta funcion debe ser almacenada en una variable cualquiera
*/
$conexion=mysqli_connect("localhost","root","","testdb2") or die("Problemas con la Conexion");
 print("<h3>Conexion Exitosa</h3>");


/*
Otra funcion que vamos a usar es la siguiente:

- mysqli_query(): esta funcion nos va a permitir ejecutar las consulas SQL, dentro de los parentesis ponemos dos parametros: poenmos la conexion de la base de datos que esta almacenada en una variable, el otro parametro que ponemos seran las consultas SQL que queremos hacer
*/
mysqli_query($conexion,"Consultas SQL") or die("Problemas con la consulta");


/*
Otra funcion que usaremos es la siguiente:

- mysqli_close(): esta funcion lo que nos permite hacer es cerra la conexion, nos pide el parametro que es: la conexioin de la base de datos que esta almacenada en una variable
*/
mysqli_close($conexion);



?>
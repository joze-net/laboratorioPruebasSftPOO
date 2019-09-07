<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Principal</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	
</head>
<body>


<?php 

$categoria=$_GET['categoria'];
$horasTrabajadas=$_GET['horas'];
include 'Empleado.php';
$e=new Empleado($categoria,$horasTrabajadas);


 ?>

 </body>
 </html>
 

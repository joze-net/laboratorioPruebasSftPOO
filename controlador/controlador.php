<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Principal</title>
	<link rel="stylesheet" type="text/css" href="../recursos/estilo.css">
	
</head>
<body>


<?php 

$categoria=$_GET['categoria'];
$horasTrabajadas=$_GET['horas'];
include '../modelo/Empleado.php';
$e=new Empleado($categoria,$horasTrabajadas);


 ?>

 </body>
 </html>
 

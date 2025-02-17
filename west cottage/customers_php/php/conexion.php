<?php
function conectarse()
{
	$servidor="31.220.106.151";
	$usuario="u148878710_admin";
	$bd="u148878710_members";
	$password="Dani@2023";
	

	$conectar = new mysqli($servidor,$usuario,$password,$bd);
	return $conectar;
}

$conexion = conectarse();
?>
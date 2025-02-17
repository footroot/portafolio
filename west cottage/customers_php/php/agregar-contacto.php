<?php
//Asigno a variables de php los valores que vienen del formulario
$email = $_POST["email_txt"];
$name = $_POST["name_txt"];
$surname = $POST["surname_txt"];
$sex = $_POST["sex_rdo"];
$birthday = $_POST["birthday_txt"];
$phone = $_POST["phone_txt"];
$country = $_POST["country_slc"];
$password_id = $_POST["password_txt"];

//dependiendo el sexo ponemos una imagen predeterminada
$imagen_generica = ($sex=="M")?"amigo.png":"amiga.png"; //imagen generica o generic image

//verificamos que no exista previamente el email del usuario en la BD
include("conexion.php");
$consulta = "SELECT * FROM contactos WHERE email='$email'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;

//Si $num_regs es igual a 0, insertamoslos datos en la tabla, sino mandamos un mensaje que diga que el usuario existe
if($num_regs == 0)
{
	//Se ejecuta la funcion para subir la imagen
	include("funciones.php");
	$tipo = $_FILES["foto_fls"]["type"];
	$archivo = $_FILES["foto_fls"]["tmp_name"];
	$se_subio_imagen = subir_imagen($tipo,$archivo,$email);

	//Si la foto en el formulario viene vacia, entonces le asigno el valor de la imagen genérica, sino entonces el nombre de la foto que se subio.
	$imagen = empty($archivo)?$imagen_generica:$se_subio_imagen;

	$consulta = "INSERT INTO u148878710_members (email,name_1,surname,sex,birthday,phone,country,picture,password_id) VALUES ('$email','$name_1','$surname','$sex','$birthday','$phone','$country','$picture','$password_id')";
	$ejecutar_consulta = $conexion->query($consulta);

	if($ejecutar_consulta)
		$mensaje = "Se ha dado de alta al contacto con el email <b>$email</b> :)";
	else
		$mensaje = "No se pudo dar de alta al contacto con el email <b>$email</b> :(";
}
else
{
	$mensaje = "No se pudo dar  de alta al contacto con el email <b>$email</b> por que ya existe :/";
}

$conexion->close();
header("Location: ../index.php?op=alta&mensaje=$mensaje");
?>
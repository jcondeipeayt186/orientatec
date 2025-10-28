<?php
include 'basededatos.php';


function insertar($nombreIngresado, $apellidoIngresado, $emailIngresado){
	$link = conectarBD();

	// se genera el SQL para insertar un registro
	$insert_value = 'INSERT INTO `contactos`.`persona` (`Nombre` , `Apellido` , `Email`) VALUES 
					("' . $nombreIngresado . '", "' . $apellidoIngresado . '", "' . $emailIngresado . '")';

	$retry_value = mysqli_query($link, $insert_value);//INSERTA REGISTRO

	if (!$retry_value) {//si hubo algún error en la consulta
			die('Error: ' . mysqli_error($link));//se muestra el error
	}
}


function actualizar($tabla, $nombreIngresado, $apellidoIngresado){
	$link = conectarBD();

	$idContactoModificar = $_POST['CONTACTO_ID'];	

	$update_value = "UPDATE '".$tabla."' SET `Nombre`= '" . $nombreIngresado."', `Apellido`= '".$apellidoIngresado. 
						" WHERE `idpersona` = '".$idContactoModificar."'";

	$retry_value = mysqli_query($link, $update_value);//ACTUALIZA REGISTRO

	if (!$retry_value) {//si hubo algún error en la actualización
		die('Error: ' . mysqli_error($link));//se muestra el error
	}
}

function consultar($tabla, $filtro){
	$link = conectarBD();

	$resultado=mysqli_query($link, "SELECT * FROM '".$tabla."'' WHERE ".$filtro);

	return $resultado;
}

function eliminar(){
	$link = conectarBD();

	if (isset($_GET["ELIMINAR_CONTACTO"])){//isset controla si existe el parametro utilizado con GET o POST
		if($_GET["ELIMINAR_CONTACTO"]!=null){
			//Eliminar en SQL
			$deleteSQL = "DELETE FROM persona WHERE idpersona =".$_GET["ELIMINAR_CONTACTO"];//eLIMINA CONTACTO
			$resultado=mysqli_query($link, $deleteSQL);
		}
	}
}


   


    




?>
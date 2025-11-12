<?php
// Incluir archivo de configuración
require_once __DIR__ . '/config.php';

function conectarBD(){
  // Usar constantes del archivo de configuración
  $db_host = DB_HOST;
  $db_user = DB_USER;
  $db_password = DB_PASSWORD;
  $db_name = DB_NAME;

  //Se conecta a la base de datos
  $link = mysqli_connect($db_host, $db_user, $db_password, $db_name);

  /* comprobar la conexión */
  if (mysqli_connect_errno()) {
      printf("Falló la conexión: %s\n", mysqli_connect_error());
      exit();
  }
  return $link;
}

function desconectarBD($conexion){
  mysqli_close($conexion);//CIERRA LA CONEXION
}

 function chequearSession(){
    session_start();
    $usuario=$_SESSION["usuario"];//si retorna un valor significa que está logueado
    if ($usuario==""){
        header('location:avisoErrorLogin.html');
        exit;
        }
    }


  function login(){
    $link = conectarBD();
    if($_POST["usuario"]!=null){
      $usuario=$_POST["usuario"];
      $contrasena=$_POST["clave"];
          
      $resultado = 
          mysqli_query($link,
            "SELECT * FROM usuario where nombre='".$usuario."' and contrasenia='".$contrasena."'");
       }else if($_SESSION["usuario"]!=null){
          $usuario=$_SESSION["usuario"];
          return true;
       }     
       print_r("Consulta usuarioooooooo:".mysqli_num_rows($resultado)>0);

       if (mysqli_num_rows($resultado)>0){  //EXISTE EL USUARIO CON ESA CLAVE
        //Login correcto
        session_start();
        $row = mysqli_fetch_assoc($resultado);

        /*Guardo en la sesion los datos del usuario logueado*/
        //session_register("usuario"); // VERSION PHP < 5.4
        $_SESSION["usuario"]=$usuario;

    }else{//No había ingresado y no coinciden los datos de usuario y clave
      //Login incorrecto
      session_start();
      $_SESSION = array();
      session_destroy();
      header("location:avisoErrorLogin.html");
    }

  }

?>
<?php
class Auth{

  function __construct()
  {
    session_start();
  }

  public function loguearUsuario($Email){
    $_SESSION["Email"] = $Email;

    if(isset($_POST["rememberme"])){ //Seteamos cookie si el usuario tildó la casilla "Recordarme"
      setcookie('Email', $Email, time()+60*60);
    }

  }

  public function usuarioLogueado(){
    return isset($_SESSION["Email"]);
  }


}
?>

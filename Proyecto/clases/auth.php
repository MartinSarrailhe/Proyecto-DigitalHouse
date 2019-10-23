<?php
class Auth{

  function __construct()
  {
    session_start();
  }

  public function loguearUsuario($email){
    $_SESSION["Email"] = $email;

    if(isset($_POST["rememberme"])){ //Seteamos cookie si el usuario tildó la casilla "Recordarme"
      setcookie('Email', $email, time()+60*60);
    }

  }

  public function usuarioLogueado(){
    return isset($_SESSION["Email"]);
  }


}
?>

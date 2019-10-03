<?php

session_start();

//Registro.php

function validarRegistro($datos){
  $errores = [];
  $datosFinales = [];

  foreach ($datos as $key => $value) {
    if( $key=="username" || $key == "Email" || $key == "nombre" || $key == "Apellido"){
    $datosFinales[$key] = trim($value);
    } else {
      $datosFinales[$key] = $value;
    }
  }

  if( strlen($datosFinales["nombre"])==0 ){
    $errores["nombre"] = "El campo es obligatorio";
  }

  if( strlen($datosFinales["Apellido"])==0 ){
    $errores["Apellido"] = "El campo es obligatorio";
  }

  if( strlen($datosFinales["Email"]) == 0){
    $errores["Email"] = "El campo es obligatorio";
  } else if( !filter_var($datosFinales["Email"], FILTER_VALIDATE_EMAIL) ){
    $errores["Email"] = "Por favor ingrese un email con formato válido.";
  } else if(buscarUsuarioPorMail($datosFinales["Email"])){
    $errores["Email"] = "El email ingresado ya fue registrado";
  }


  if( strlen($datosFinales["username"])==0 ){
    $errores["username"] = "El campo es obligatorio";
  }

  if(strlen($datosFinales["Contraseña"]) == 0){
    $errores["Contraseña"] = "El campo es obligatorio";
  } else if(strlen($datosFinales["Contraseña"])<8){
    $errores["Contraseña"] = "Por favor ingrese una contraseña de al menos 8 dígitos";
  }

  if(strlen($datosFinales["Contraseña2"]) == 0){
    $errores["Contraseña2"] = "El campo es obligatorio";
  } else if($datosFinales["Contraseña"] !== $datosFinales["Contraseña2"]){
    $errores["Contraseña2"] = "Las contraseñas no coinciden";
  }

  if(strlen($_FILES['avatar']['name']) == 0){
    $errores['avatar'] = "Por favor suba una imagen de perfil.";
  } else {
    $ext = pathinfo($_FILES["avatar"]['name'], PATHINFO_EXTENSION);

    if($ext !== "jpg" && $ext !== "png" && $ext !== "jpeg"){
      $errores['avatar'] = "El archivo debe ser una imagen de tipo .jpg, .jpeg, .png";
    }

  }

  return $errores;

}

function nextId(){

 if(!file_exists("db.json")){
   return 1;
 }
 $json = file_get_contents("db.json");
 $array = json_decode($json, true);
 $lastUser = array_pop($array['usuarios']);
 $lastId = $lastUser['id'];

 return $lastId + 1;

}


function armarUsuario(){
  return $usuario = [
    "id" => nextId(),
    "nombre" => trim($_POST['nombre']),
    "Apellido" => trim($_POST['Apellido']),
    "Email" => trim($_POST['Email']),
    "username" => trim($_POST['username']),
    "Contraseña" => password_hash($_POST['Contraseña'], PASSWORD_DEFAULT)
  ];
}

function guardarUsuario($user){

  if(file_exists("db.json")){
    $json = file_get_contents("db.json");
  } else{
    $json = "";
  }

  $array = json_decode($json, true);
  $array['usuarios'][] = $user;
  $json = json_encode($array,JSON_PRETTY_PRINT);
  file_put_contents("db.json", $json);
}

function buscarUsuarioPorMail($email){

  if(!file_exists("db.json")){
    $array['usuarios'] = [];
  } else {
    $json = file_get_contents("db.json");
    $array = json_decode($json, true);
  }

  foreach ($array['usuarios'] as $usuario) {
    if($usuario['Email'] === $email){
      return $usuario;
    }
  }
  return null;
}

function existeUsuario($email){
  return buscarUsuarioPorMail($email) !== null;
}


//Login.php

function validarLogin($datos){
  $errores = [];


  if(strlen($datos['Email']) == 0){
    $errores['Email'] = "El campo email es obligatorio.";
  } else if(!existeUsuario($datos['Email'])){
    $errores['login'] = "Usuario o contraseña incorrecta.";
  }

  if(strlen($datos['Contraseña']) == 0){
    $errores['login'] = "El campo contraseña es obligatorio.";
  } else if(existeUsuario($datos['Email'])){
      $usuario = buscarUsuarioPorMail($datos['Email']);
      if(!password_verify($datos['Contraseña'], $usuario['Contraseña'])){
        $errores['login'] = "Usuario o contraseña incorrecta.";
      }
  }

  return $errores;
}

function loguearUsuario($email){
  $_SESSION['Email'] = $email;

  if(isset($_POST["rememberme"])){
    setcookie('email', $email, time()+60*60);
  }
}

function usuarioLogueado(){
  return isset($_SESSION["Email"]);
}





















?>

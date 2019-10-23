<?php
/**
 *
 */
class Validator
{

  public static function validarRegistro($datos){
    //global $json;
    global $db;

    $errores = [];

    $datosFinales = [];

    // Limpia espacios al cominenzo y la final de cada campo.
    foreach ($datos as $key => $value) {
      //¿Cuándo no debe trimear?
      $datosFinales[$key] = trim($value);
    }

    //Validaciones
    //=====================

    //Nombre
    if(strlen($datosFinales["nombre"]) == 0){
      $errores["nombre"] = "El campo nombre debe estar completo";
    } else if (!ctype_alpha($datosFinales["nombre"])){
      $errores["nombre"] = "Por favor ingrese caracteres alfabéticos";
    } //Validar con expresion regular que permita espacios intermedios.

    //Apellido
    if(strlen($datosFinales["Apellido"]) == 0){
      $errores["Apellido"] = "El campo nombre debe estar completo";
    } else if (!ctype_alpha($datosFinales["Apellido"])){
      $errores["Apellido"] = "Por favor ingrese caracteres alfabéticos";
    } //Validar con expresion regular que permita espacios intermedios.

    //Username
    if(strlen($datosFinales["username"]) == 0){
      $errores["username"] = "El campo nombre debe estar completo";
    } else if (!ctype_alpha($datosFinales["nombre"])){
      $errores["username"] = "Por favor ingrese caracteres alfabéticos";
    } //Validar con expresion regular que permita espacios intermedios.
    //Falta que valide si el usuario ya se encuenta en la db

    //Email
    if(strlen($datosFinales["Email"]) == 0){
      $errores["Email"] = "El campo email debe estar completo";
    } else if(!filter_var($datosFinales["Email"], FILTER_VALIDATE_EMAIL)){
      $errores["Email"] = "Por favor ingrese un email con formato válido";
    } else if($db->buscarUsuarioPorMail($datosFinales["Email"])) {
      $errores["Email"] = "El email ya existe. Por favor elija otro.";
    }


    //Password
    if(strlen($datosFinales["Contraseña"]) < 4){
      $errores["Contraseña"] = "La contraseña debe tener al menos 4 caracteres";
    }

    //retype Password
    if(strlen($datosFinales["Contraseña2"]) === 0){
      $errores["Contraseña2"] = "El campo no puede estar vacío.";
    } else if($datosFinales["Contraseña"] !== $datosFinales["Contraseña2"]){
      $errores["Contraseña2"] = "Las contraseñas no coiniceden";
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

  public static function validarLogin($datos){
    global $db;
    $errores = [];

    //Email
    if(strlen($datos["Email"]) == 0){
      $errores["Email"] = "El campo email debe estar completo";
    } else if(!filter_var($datos["Email"], FILTER_VALIDATE_EMAIL)){
      $errores["Email"] = "Por favor ingrese un email con formato válido";
    } else if(!$db->buscarUsuarioPorMail($datos["Email"])) {
      $errores["Email"] = "El usuario no existe Por favor regístrese.";
    }

    //Password
    if(strlen($datos["Contraseña"]) == 0){
      $errores["Contraseña"] = "El campo password debe estar completo";
    } else if($db->buscarUsuarioPorMail($datos["Email"])){
        $usuario = $db->buscarUsuarioPorMail($datos["Email"]);

        if( !password_verify($datos["Contraseña"], $usuario->getPassword()) ){
          $errores["Contraseña"] = "La contraseña ingresada es incorrecta";
        }
    }

    return $errores;
  }
}

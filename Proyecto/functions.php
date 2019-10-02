<?php



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
  }


  if( strlen($datosFinales["username"])==0 ){
    $errores["username"] = "El campo es obligatorio";
  }

  if(strlen($datosFinales["Contraseña"]) == 0){
    $errores["Contraseña"] = "El campo es obligatorio";
  } else if($datosFinales["Contraseña"]>8){
    $errores["Contraseña"] = "Por favor ingrese una contraseña de al menos 8 dígitos";
  }

  if(strlen($datosFinales["Contraseña2"]) == 0){
    $errores["Contraseña2"] = "El campo es obligatorio";
  } else if($datosFinales["Contraseña"] !== $datosFinales["Contraseña2"]){
    $errores["Contraseña2"] = "Las contraseñas no coinciden";
  }

  return $errores;

}


?>

<?php
/**
 *
 */
// include "dbjson.php"; Está incluido en init.php junto con la instancia.

class Usuario
{ //Atributos
  private $id;
  private $nombre;
  private $Apellido;
  private $username;
  private $Email;
  private $Contraseña;

  //Constructor
  function __construct(Array $array)
  {
    // 2 Origenes: 1ra es desde el formulario de registro. 2da
    global $db; //Tremos la instancia de base de datos para poder usarla. Otra opción es pasarla por parámetro.

    if(isset($array["id"])){
      $this->id = $array["id"];
      $this->Contraseña = $array["Contraseña"];
    } else {
      //Este if resuelve si usamos json o mysql
      if ($db instanceof DbJson ){
        $this->id = $json->nextId(); //nextID();
      } else {
        $this->id = null;
      }
      $this->Contraseña = password_hash($array["Contraseña"], PASSWORD_DEFAULT);
    }
    $this->nombre = $array["nombre"];
    $this->Apellido = $array["Apellido"];
    $this->username = $array["username"];
    $this->Email = $array["Email"];


  }

  //Métodos
  public function getId(){
    return $this->id;
  }
  public function getName(){
    return $this->nombre;
  }
  public function getApellido(){
    return $this->Apellido;
  }
  public function getEmail(){
    return $this->Email;
  }
  public function getUsername(){
    return $this->username;
  }
  public function getPassword(){
    return $this->Contraseña;
  }



}

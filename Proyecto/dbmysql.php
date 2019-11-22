<?php

/**
 *
 */
class DbMysql extends db
{
  private $dbMysql;

  public function __construct()
  {
    $dsn = "mysql:host=127.0.0.1;dbname=lugama2;port=3306";
    $user = "root";
    $pass = ""; //¿Cómo resolvemos que las contraseñas o usuarios sean diferentes.

    try {
      $this->dbMysql = new PDO($dsn, $user, $pass); //Resuelve la conexión.
      $this->dbMysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Para poder ver en php los errores que devuelva SQL

    } catch (\Exception $e) {
        echo "Hubo en error. Mensaje: ";
        var_dump($e->getMessage());
        $db = null;
    }
  }

  public function guardarUsuario(Usuario $user, string $file = null){

    $stmt = $this->dbMysql->prepare("INSERT INTO usuarios VALUES(default, :nombre, :Apellido, :username, :Email, :Contraseña)");

    $stmt->bindValue(":nombre", $user->getNombre());
    $stmt->bindValue(":Apellido", $user->getApellido());
    $stmt->bindValue(":username", $user->getUsername());
    $stmt->bindValue(":Email", $user->getEmail());
    $stmt->bindValue(":Contraseña", $user->getPassword());

    $stmt->execute();


  }

  public function buscarUsuarioPorMail(string $email){

    $stmt = $this->dbMysql->prepare("SELECT * FROM usuarios WHERE Email = :Email");

    $stmt->bindValue(":Email", $Email);
    $stmt->execute();

    $usuarioArray = $stmt->fetch(PDO::FETCH_ASSOC);
    if($usuarioArray){
        $usuario = new Usuario($usuarioArray);
    } else {
      $usuario = null;
    }
    return $usuario;

  }














}

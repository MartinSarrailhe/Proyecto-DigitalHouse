<?php
include "clases/db.php";
include "clases/dbjson.php";
include "clases/dbmysql.php";
include "clases/validator.php";
include "clases/auth.php";
include "clases/usuario.php";

$auth = new Auth;
// var_dump($auth);

$file = "db.json";
//$db = new DbJson($file);
$db = new DbJson;


// todo: //refactorizar todas las llamadas a DB para que no rompa. Resuelto
// todo: refactorizar el constructor de usuario para que filtre el id.  Resuelto.

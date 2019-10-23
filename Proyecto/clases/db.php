<?php
/**
 *
 */
abstract class Db
{
  abstract public function guardarUsuario(Usuario $usuario, string $file = null);
  abstract public function buscarUsuarioPorMail(string $Email);

}

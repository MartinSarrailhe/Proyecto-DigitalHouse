<?php
session_start();
session_destroy();
setcookie('Email', '', -1);
header("Location:home.php");
exit;

?>

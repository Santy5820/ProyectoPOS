<?php
session_start();
require_once 'User.php';
require_once '../../Modelo/connection.php';
$usuario = $_POST['inputEmail'];
$clave = $_POST['inputPassword'];
$datos = array($usuario,$clave);
$obj = new Usuario();
echo $obj->login($datos);
?>
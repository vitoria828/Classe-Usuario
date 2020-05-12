<?php


$nome = "vitoria";
$email = "vitribeiro914@gmal.com";
$login = "vitoria";
$senha = "123";

include("classeUsuario.php");

$usuario = new Usuario();

$usuario->addusuario($nome, $email, $login, $senha);

print_r($usuario);
?>

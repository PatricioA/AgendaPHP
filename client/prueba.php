<?php
require_once('../server/bdd.php');

$usuario= $_POST['user'];
$clave= $_POST['password'];
$sql = "SELECT * FROM usuarios WHERE email='".$usuario."' and psw='".$clave."'";

$req = $bdd->prepare($sql);
$req->execute();

echo $usuario;
echo $clave;

?>

<?php

$hostname = "localhost";
$bancodedados = "bancodedados";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno){
    echo "falha ao conectar: (" . $mysqli->connect_errno . ") " .$mysli->connect_error;
}else
{
    echo "conectado!";
}

?>
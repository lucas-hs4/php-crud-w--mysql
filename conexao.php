<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "gestao_eventos";

$mysqli = new mysqli($host, $usuario, $senha, $banco);

if ($mysqli->connect_errno) {
    die("Falha na conexão: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}
   // echo "Conectado ao banco de dados com sucesso!";
?>
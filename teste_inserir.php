<?php
include('conexao.php');

$titulo = "Meu primeiro evento";
$descricao = "Uma festa de Natal incrível para desenvolvedores.";

$sql = "INSERT INTO eventos (titulo, descricao)
        VALUES ('$titulo', '$descricao')";

if ($mysqli->query($sql)) {
    echo "<h1>Sucesso!</h1>";
    echo "O evento '$titulo' foi gravado no banco de dados.";
} else {
    echo "Erro ao inserir: " . $mysqli->error;
}
?>
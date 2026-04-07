<?php
include('conexao.php');

$titulo = "Meu primeiro evento";
$data = "2026-12-25";
$descricao = "Uma festa de Natal incrível para desenvolvedores.";

$sql = "INSERT INTO eventos (titulo, data_evento, descricao)
        VALUES ('$titulo', '$data', '$descricao')";

if ($mysqli->query($sql)) {
    echo "<h1>Sucesso!</h1>";
    echo "O evento '$titulo' foi gravado no banco de dados.";
} else {
    echo "Erro ao inserir: " . $mysqli->error;
}
?>
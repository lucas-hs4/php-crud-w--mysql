<?php
include('conexao.php');
$id = $_GET['id'];

$sql = "DELETE FROM eventos WHERE id = '$id'";

if($mysqli->query($sql)) {
    header("Location: lista_eventos.php");
} else {
    echo "Erro ao excluir: " . $mysqli->error;
}
?>
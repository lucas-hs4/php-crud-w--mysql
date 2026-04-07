<?php
include('conexao.php');

$id = $_GET['id'];
$sql_consulta = "SELECT * FROM eventos WHERE id = '$id'";
$resultado = $mysqli->query($sql_consulta);
$evento = $resultado->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $data = $_POST['data_evento'];
    $desc = $_POST['descricao'];

    $sql_update = "UPDATE eventos SET
                            titulo = '$titulo',
                            data_evento = '$data',
                            descricao = '$desc'
                            WHERE id = '$id'";
    if ($mysqli->query($sql_update)) {
        header("Location: lista_eventos.php");
    } else {
        echo "Erro ao atualizar: " . $mysqli->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Evento</title>
    <form method="POST">
        <Label>Titulo:</Label><br>
        <input type="text" name="titulo" value="<?php echo $evento['titulo']; ?>" required><br><br>

        <label>Data:</label><br>
        <input type="date" name="data_evento" value="<?php echo $evento['data_evento']; ?>" required><br><br>

        <label>Descrição:</label>
        <textarea name="descricao"><?php echo $evento['descricao']; ?></textarea><br><br>

        <button type="submit">Salvar Alterações</button>
        <a href="lista_eventos.php">Cancelar</a>
    </form>
</head>
<body>
    
</body>
</html>
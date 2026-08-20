<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Evento</title>
</head>
<body>
    <a href="index.php">Página Inicial</a>
    <h2>Novo Evento</h2>
    <form method="POST" action="">
        <label>Titulo:</label><br>
        <input type="text" name="titulo" required><br><br>

        <label>Data:</label><br>
        <input type="date" name="data_evento" required><br><br>

        <label>Descrição:</label><br>
        <textarea name="descricao"></textarea><br><br>

        <button type="submit">Salvar Evento</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include('conexao.php');

        if (isset($_POST['titulo']) && isset($_POST['data_evento'])) {

            $titulo = $_POST['titulo'];
            $data = $_POST['data_evento'];
            $desc = $_POST['descricao'];

            $sql = "INSERT INTO eventos (titulo, data_evento, descricao)
                VALUES ('$titulo', '$data', '$desc')";
            
            if($mysqli->query($sql)) {
                echo "<p style='color: green'>Evento Cadastrado com sucesso!</p>";
            } else {
                echo "Erro no banco: " . $mysqli->error;
            }
        }
    }
    ?>
    
</body>
</html>
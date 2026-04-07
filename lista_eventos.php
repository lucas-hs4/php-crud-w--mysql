<?php
    include('conexao.php');

$sql = "SELECT * FROM eventos ORDER BY data_evento ASC";

$consulta  = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Eventos</title>
    <style> 
        table { width: 80%; border-collapse: collapse; margin: 20px 0; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h2>Meus Eventos Cadastrados</h2>
    <a href="index.php">Página Inicial</a><br>
    <a href="cadastro.php">Cadastrar Novo Evento</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Data</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php

            while($evento = $consulta->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $evento['id']; ?></td>
                    <td><?php echo $evento['titulo']; ?></td>
                    <td><?php echo date('d/m/Y', strtotime($evento['data_evento'])); ?></td>
                    <td><?php echo $evento['descricao']; ?></td>
                    <td>
                        <a href="editar_evento.php?id=<?php echo $evento['id']; ?>">Editar</a>
                        <a href="excluir_evento.php?id=<?php echo $evento['id']; ?>"
                        onclick="return confirm('Tem certeza que deseja excluir?')">
                        Excluir
                        </a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>
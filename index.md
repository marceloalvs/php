<?php
include 'db.php';

$stmt = $pdo->query("SELECT * FROM cadastro");
$cadastro = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD - Listar Serviços</title>
</head>
<body>
    <h1>Serviços de Carro</h1>
    <a href="create.php">Adicionar Novo Serviço</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Carro</th>
            <th>Placa</th>
            <th>Serviço</th>
            <th>Preço</th>
            <th>Data</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($servicos as $servico): ?>
            <tr>
                <td><?= $servico['id'] ?></td>
                <td><?= $servico['nome'] ?></td>
                <td><?= $servico['carro'] ?></td>
                <td><?= $servico['placa'] ?></td>
                <td><?= $servico['servico'] ?></td>
                <td><?= number_format($servico['preco'], 2, ',', '.') ?></td>
                <td><?= $servico['data'] ?></td>
                <td>
                    <a href="update.php?id=<?= $servico['id'] ?>">Editar</a>
                    <a href="delete.php?id=<?= $servico['id'] ?>">Deletar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

<?php
include 'db.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM servicos WHERE id = ?");
$stmt->execute([$id]);
$servico = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $carro = $_POST['carro'];
    $placa = $_POST['placa'];
    $servicoTipo = $_POST['servico'];
    $preco = $_POST['preco'];
    $data = $_POST['data'];

    $stmt = $pdo->prepare("UPDATE servicos SET nome = ?, carro = ?, placa = ?, servico = ?, preco = ?, data = ? WHERE id = ?");
    $stmt->execute([$nome, $carro, $placa, $servicoTipo, $preco, $data, $id]);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atualizar Serviço</title>
</head>
<body>
    <h1>Atualizar Serviço</h1>
    <form method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?= $servico['nome'] ?>" required>
        <br>
        <label>Carro:</label>
        <input type="text" name="carro" value="<?= $servico['carro'] ?>" required>
        <br>
        <label>Placa:</label>
        <input type="text" name="placa" value="<?= $servico['placa'] ?>" required>
        <br>
        <label>Serviço:</label>
        <input type="text" name="servico" value="<?= $servico['servico'] ?>" required>
        <br>
        <label>Preço:</label>
        <input type="number" name="preco" step="0.01" value="<?= $servico['preco'] ?>" required>
        <br>
        <label>Data:</label>
        <input type="date" name="data" value="<?= $servico['data'] ?>" required>
        <br>
        <button type="submit">Atualizar</button>
    </form>
    <a href="index.php">Voltar</a>
</body>
</html>

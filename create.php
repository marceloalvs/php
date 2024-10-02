<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $carro = $_POST['carro'];
    $placa = $_POST['placa'];
    $servico = $_POST['servico'];
    $preco = $_POST['preco'];
    $data = $_POST['data'];

    $stmt = $pdo->prepare("INSERT INTO servicos (nome, carro, placa, servico, preco, data) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$nome, $carro, $placa, $servico, $preco, $data]);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Criar Serviço</title>
</head>
<body>
    <h1>Criar Novo Serviço</h1>
    <form method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required>
        <br>
        <label>Carro:</label>
        <input type="text" name="carro" required>
        <br>
        <label>Placa:</label>
        <input type="text" name="placa" required>
        <br>
        <label>Serviço:</label>
        <input type="text" name="servico" required>
        <br>
        <label>Preço:</label>
        <input type="number" name="preco" step="0.01" required>
        <br>
        <label>Data:</label>
        <input type="date" name="data" required>
        <br>
        <button type="submit">Adicionar</button>
    </form>
    <a href="index.php">Voltar</a>
</body>
</html>

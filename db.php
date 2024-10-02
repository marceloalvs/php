<?php
$host = 'localhost'; // ou seu servidor de banco de dados
$db   = 'cadastro';
$user = 'if0_37420302';
$pass = 'ear68t63Lu';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>

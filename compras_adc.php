<?php
# compras_adc.php
require('inc/banco.php');

$item = $_POST['item'] ?? null;
// Prepara a consulta
if($item) {
    $query = $pdo->prepare('INSERT INTO compras (item) VALUES (:it)');
// Associa ma consulta
    $query->bindValue(':it', $item);

// Executa a consulta
$query->execute();
};

header('location:compras.php');
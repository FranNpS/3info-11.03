<?php
# compras_excl.php
require('inc/banco.php');

$id = $_GET['id'] ?? null;
// Prepara a consulta
if($id) {
    $query = $pdo->prepare('DELETE FROM compras WHERE id = :id');

// Executa a consulta
    $query->execute([
        ':id' => $id
    ]);     
};

header('location:compras.php');
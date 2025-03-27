<?php
# compras_adc.php
require('inc/banco.php');

$titulo = $_POST['titulo'] ?? null;
$data = $_POST['data'] ?? null;
// Prepara a consulta
if($titulo) {
    $query = $pdo->prepare('INSERT INTO compromissos (titulo, data) VALUES (:it, :data)');
// Associa ma consulta
    $query->bindValue(':it', $titulo);
    $query->bindValue(':data', $data);

// Executa a consulta
$query->execute();
};

header('location:compromissos.php');
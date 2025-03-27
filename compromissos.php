<?php
// compromissos.php
require_once('twig_carregar.php');
require('inc/banco.php');

// Busca as compromissos no banco
$dados = $pdo->query('SELECT * FROM compromissos');

$compro = $dados->fetchAll(PDO::FETCH_ASSOC);

echo $twig->render('lista_de_compromissos.html', [
    'titulo' => 'Compromissos',
    'compromissos' => $compro,
]); 
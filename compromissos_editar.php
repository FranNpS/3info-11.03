<?php
 # compras_editar.php
 require_once('twig_carregar.php');
 require('inc/banco.php');
 
 if ($_SERVER['REQUEST_METHOD'] == 'GET') {
     // Get = Visualizar o formulário
     $id = $_GET['id'] ?? null;
 
     if ($id) {
         $titulo = $pdo->prepare('SELECT * FROM compromissos WHERE id = :id');
         $titulo->execute([':id' => $id]);
         $dados = $titulo->fetch();
 
         echo $twig->render('compromissos_editar.html', [
             'titulo' => 'Compromissos',
             'dados' => $dados,
         ]);
     }
 }
 else {
     // Post = Gravar os dados
     $edit = $pdo->prepare('UPDATE compromissos SET titulo = :titulo WHERE id = :id');
     $edit->execute([
         ':titulo' => $_POST['titulo'],
         ':id' => $_POST['id'],
     ]);
     header('location:compromissos.php');
 }
<?php
//twig_carregar.php

// Carregador do Composer
require_once('vendor/autoload.php');

// Loader e quem carrega os arquivos HTML
$loader = new \Twig\Loader\FilesystemLoader('./templates');

// Criar o objeto do twig
$twig = new \Twig\Environment($loader);
<?php
# horario.php 
require_once('vendor/autoload.php');
require('twig_carregar.php');
use Carbon\Carbon;


/**
 * Montar um pagina no twig chamada Horario
 * era possivel acessar pelo menu
 * Devera mostrar a data de hoje e a data de amanhã
 */


 date_default_timezone_set('America/Sao_Paulo');

    $data = Carbon::now();
    $dataAdd = Carbon::now()->addDay();



 echo $twig->render('horario.html', [
    'titulo' => 'Horário',
    'data' => $data,
    'amanha' => $dataAdd
]);
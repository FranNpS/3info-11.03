<?php
# carbon_exemplos.php


//CArregar o carregador do composer
require_once('vendor/autoload.php');
date_default_timezone_set('America/Sao_Paulo');

use Carbon\Carbon;

// Agora
echo Carbon::now() . '<br>';

// Adiciona um dia

echo Carbon::now()->addDay() . '<br>';

// Subtrair uma semana

echo Carbon::now()->subWeek() . '<br>';

//adiciona 4 anos

echo 'Próximas olimpiadas: ' . 
        Carbon::createFromDate(2024)->addYears(4)->year . '<br>';;

//Idade de Alguem
echo 'Sua idade é: ' .
        Carbon::createFromDate(2008, 1, 9)->age . '<br>';

// Final de semana

if(Carbon::now()->isWeekend()){
    echo 'Festa!';
}else{
    echo 'Aula';
};

$nasci = Carbon::createFromDate(2008, 1, 9);

echo Carbon::now()->diff($nasci);


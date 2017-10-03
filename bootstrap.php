<?php

use Carlinhos\Tutorial\Pessoa;
use Carlinhos\Tutorial\Repository\PessoaManager;

require __DIR__ . '/vendor/autoload.php';
date_default_timezone_set('America/Sao_Paulo');
$router = new Respect\Rest\Router();

$peopleManager = new PessoaManager();

$router->get('/', function () {
    return "Agora são " . date('H:i');
});

$router->get('/pessoas', function () use ($peopleManager) {
    $pessoas = $peopleManager->getAll();
    $html = ['<ul>'];
    foreach ($pessoas as $pessoa) {
        $html[] = "<li>{$pessoa->getNome()}</li>";
    }
    $html[] = '</ul>';
    return implode(PHP_EOL, $html);
});

$router->get('/pessoa/*',function ($name) use ($peopleManager){
   $pessoa = $peopleManager->getByName($name);
   return "<h1>Eu sou a pessoa {$pessoa->getNome()}</h1>";
});
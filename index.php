<?php

use Personagem\factory\factoryPersonagem;

require_once "vendor/autoload.php";


$guerreiro = factoryPersonagem::criar('guerreiro');
echo "Um slime apareceu!\n";
$slime = factoryPersonagem::criar('slime');
$guerreiro->atacar();
$slime->receberDano(2);
$slime->atacar();
$guerreiro->receberDano(1);
echo "Guerreiro HP: " . $guerreiro->getStatus() . "\n";
echo "Slime Hp: " . $slime->getStatus() . "\n";
$guerreiro->atacar();
$slime->receberDano(2);
$slime->atacar();
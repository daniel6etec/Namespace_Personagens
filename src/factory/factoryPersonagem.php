<?php
namespace Personagem\factory;

use Personagem\interface\InterfacePersonagem;
use Personagem\models\Arqueiro;
use Personagem\models\Guerreiro;
use Personagem\models\Mago;
use Personagem\models\Slime;

class factoryPersonagem {
    public static function criar(string $mensagem): InterfacePersonagem {
        switch ($mensagem) {
            case 'arqueiro':
                return new Arqueiro();
            case 'guerreiro':
                return new Guerreiro();
            case 'mago':
                return new Mago();
            case 'slime':
                return new Slime();
            default:
                throw new \Exception('Espere o próximo patch...');
        }
    }
}
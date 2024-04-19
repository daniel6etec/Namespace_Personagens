<?php
namespace Personagem\models;

use Personagem\interface\InterfacePersonagem;

class Guerreiro implements InterfacePersonagem {
    private static $status;
    private static $ativo;

    public function __construct(){
        self::$status = 3;
        self::$ativo = true;
    }

    public function atacar(){
        if(self::$ativo == true){
            echo "O guerreiro ataca com sua espada!\n";
        } else {
            echo "O guerreiro está caido...\n";
        }
        
    }

    public function receberDano($dano){
        self::$status -= $dano;

        if(self::$status < 1){
            self::$ativo = false;
        }
    }

    public static function getStatus()
    {
        return self::$status;
    }

    public static function setStatus($status)
    {
        self::$status = $status;
    }

}
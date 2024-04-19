<?php
namespace Personagem\models;

use Personagem\interface\InterfacePersonagem;

class Slime implements InterfacePersonagem {
    private static $status;
    private static $ativo;

    public function __construct(){
        self::$status = 3;
        self::$ativo = true;
    }

    public function atacar(){
        if(self::$ativo == true){
            echo "O slime ataca!\n";
        } else {
            echo "O slime está caido...\n";
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
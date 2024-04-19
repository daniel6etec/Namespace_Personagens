<?php
namespace Personagem\interface;

interface InterfacePersonagem {
    public function atacar();
    public function receberDano($dano);
    public static function getStatus();
    public static function setStatus($status);
}
<?php

require("arms.php");
require("legs.php");
require("head.php");


class IronMan{

    public $armSx;
    public $armDx;
    public $legs;
    public $head;

    public function __construct(Legs $_legs, Head $_head, Arm $_armSx = new Razzi(), Arm $_armDx = new RaggiLaser){

        $this->armSx = $_armSx;
        $this->armDx = $_armDx;
        $this->legs = $_legs;
        $this->head = $_head;

        

    }

    public function attaccareSx(){
        $this->armSx->attacco();
    }

    public function attaccareDx(){
        $this->armDx->attacco();
    }

    public function movimento(){
        $this->legs->muoviti();
    }

    public function chiamare(){
        $this->head->chiama();
    }

    
}

$ironMan1 = new IronMan(new Propulsori(), new Jarvis(), new Razzi());
$ironMan2 = new IronMan(new Salto(), new Jarvis(), new RaggiLaser(), new Razzi());
$ironMan3 = new IronMan(new Corsa(), new Jarvis(), new RaggiLaser());
$ironMan4 = new IronMan(new Propulsori(), new Jarvis(), new Razzi(), new RaggiLaser());
$ironMan5 = new IronMan(new Corsa(), new Jarvis());

var_dump($ironMan1);
var_dump($ironMan2);
var_dump($ironMan3);


// $ironMan1->attaccareSx();
// $ironMan1->attaccareDx();
// $ironMan1->movimento();
// $ironMan1->chiamare();



?>
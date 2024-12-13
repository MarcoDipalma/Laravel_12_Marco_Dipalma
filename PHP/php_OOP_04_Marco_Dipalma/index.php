<?php

// $


class Car {
    private $num_telaio;

    public function __construct($_num_telaio){
        $this->num_telaio = $_num_telaio;
    }

    public function numeroTelaio(){
        echo $this->num_telaio;
    }

}


class Fiat extends Car {

    protected $license;
    protected $name;
    protected $plate;

    public function __construct($_num_telaio, $_name, $_plate){
        
        parent::__construct($_num_telaio);

        $this->name = $_name;
        $this->plate = $_plate;

    }


    public function descrizioneAuto(){

        echo "La mia macchina è " . $this->name . " con targa " . $this->plate . " e numero di telaio ";
        
        $this->numeroTelaio();
        

    }

    
}

class Opel extends Car {

    protected $license;
    protected $name;
    protected $plate;

    public function __construct($_num_telaio, $_name, $_plate){
        
        parent::__construct($_num_telaio);

        $this->name = $_name;
        $this->plate = $_plate;

    }


    public function descrizioneAuto(){

        echo "La mia macchina è " . $this->name . " con targa " . $this->plate . " e numero di telaio ";
        
        $this->numeroTelaio();
        

    }

    
}


$ciao = new Opel("1234", "Opel", "ND 123OJ");

$ciao->descrizioneAuto();







?>
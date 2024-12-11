<?php

// $


class Company {

    // Attributi
    public $name;
    public $location;
    public $tot_employees;
    public static $salary = 1500;
    public static $total = 0;

    public function __construct($_name, $_location, $_tot_employees = 0){

            // Valorizzazione degli attributi
            $this->name = $_name;
            $this->location = $_location;
            $this->tot_employees = $_tot_employees;
    }

    public function presentazione(){
        echo "L'azienda $this->name con sede a $this->location ha ben $this->tot_employees dipendenti\n";
    }

    public function annualCost($int){
        return $this->tot_employees * (self::$salary*$int);
    }

    public function printAnnualCost($month = 12){
        echo "$this->name  -->  Il costo annuale di questa azienda è di " . $this->annualCost($month) . " euro\n";
    }


    public function progressiveCost($month = 12){
        return self::$total = self::$total + $this->annualCost($month);
    }


    public static function printFinalTotal(){
        echo "Le spese totali delle aziende sono di: " . self::$total . "\n";
    }

}



$company1 = new Company('Aulab', 'Bari', 50);
$company2 = new Company('Autotappezzeria Dipalma', 'Gravina in Puglia', 5);
$company3 = new Company('Mediaworld', 'Verano Brianza', 5000);
$company4 = new Company('Macnil', 'Gravina in Puglia', 80);
$company5 = new Company('Sisal', 'Milano', 3000);

$company1->presentazione();
$company2->presentazione();
$company3->presentazione();
$company4->presentazione();
$company5->presentazione();

$company1->progressiveCost();
$company2->progressiveCost();
$company3->progressiveCost();
$company4->progressiveCost();
$company5->progressiveCost();

Company::printFinalTotal();



?>
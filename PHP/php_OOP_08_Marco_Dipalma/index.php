<?php

// $


trait Operazioni{

    public function sum($a, $b) {
        return $a + $b;
      }
      
      public function sub($a, $b) {
        return $a - $b;
      }
      
      public function mul($a, $b) {
        return $a * $b;
      }
      
      public function div($a, $b) {
        return $a / $b;
      }
      
      public function sqr($a){
        return sqrt($a);
      }
}


class Rettangolo{

    use Operazioni;

    public $base;
    public $altezza;
    
    public function __construct($_base, $_altezza){

        $this->base = $_base;
        $this->altezza = $_altezza;

    }

    public function area(){

        echo "L'area del rettangolo è di " . $this->mul($this->base, $this->altezza) . "\n";
        
    }

    public function perimetro(){

        echo "Il perimetro del rettangolo è di " . $this->sum(2*$this->base, 2*$this->altezza) . "\n";
        
    }

    public function diagonale(){

        $baseX_base = $this->base**2;
        $altezzaX_altezza = $this->altezza**2;

        $somma = $this->sum($baseX_base, $altezzaX_altezza);

        echo "La diagonale del rettangolo è di " . $this->sqr($somma);
        
    }


}


$area = new Rettangolo(3, 5);

$area->area();
$area->perimetro();
$area->diagonale();



?>
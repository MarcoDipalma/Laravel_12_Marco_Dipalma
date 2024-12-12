<?php

// $

class Vertebrates{

    public function __construct(){

        $this->printVertebrate();
        
    }

    protected function printVertebrate(){
        echo "Sono un animale Vertebrato\n";
    }

}

class Warm_blooded extends Vertebrates{
    public function __construct(){
        
        parent::__construct();

        $this->printWarmBlooded();

    }

    protected function printWarmBlooded(){
        echo "Sono un animale a Sangue Caldo\n";
    }
}

class Cold_blooded extends Vertebrates{
    public function __construct(){
        
        parent::__construct();

        $this->printColdBlooded();

    }

    protected function printColdBlooded(){
        echo "Sono un animale a Sangue Freddo\n";
    }
}

class Mammels extends Warm_blooded{
    public function __construct(){
        
        parent::__construct();

        $this->printMammels();

    }

    protected function printMammels(){
        echo "Sono un Mammifero\n";
    }
}

class Birds extends Warm_blooded{
    public function __construct(){
        
        parent::__construct();

        $this->printBirds();

    }

    protected function printBirds(){
        echo "Sono un Volatile\n";
    }
}

class Fish extends Cold_blooded{
    public function __construct(){
        
        parent::__construct();

        $this->printFish();

    }

    protected function printFish(){
        echo "Sono un Pesce\n";
    }
}

class Reptiles extends Cold_blooded{
    public function __construct(){
        
        parent::__construct();

        $this->printReptiles();

    }

    protected function printReptiles(){
        echo "Sono un Serpente\n";
    }
}

class Amphibians extends Cold_blooded{
    public function __construct(){
        
        parent::__construct();

        $this->printAmphibians();

    }

    protected function printAmphibians(){
        echo "Sono un Anfibio\n";
    }
}



$leone = new Mammels;





?>
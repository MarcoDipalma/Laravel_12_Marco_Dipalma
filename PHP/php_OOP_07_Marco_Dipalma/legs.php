<?php

abstract class Legs{
    abstract public function muoviti();
}

class Propulsori extends Legs{

    public function muoviti(){

        echo "Vola\n";

    }

}

class Salto extends Legs{

    public function muoviti(){

        echo "Salta\n";

    }

}

class Corsa extends Legs{

    public function muoviti(){

        echo "Corri\n";

    }

}



?>
<?php

abstract class Arm{
    abstract public function attacco();
    
}


class Razzi extends Arm{

    public function attacco(){

        echo "Spara razzi\n";

    }

}

class RaggiLaser extends Arm{

    public function attacco(){

        echo "Spara raggi laser\n";

    }

}



?>
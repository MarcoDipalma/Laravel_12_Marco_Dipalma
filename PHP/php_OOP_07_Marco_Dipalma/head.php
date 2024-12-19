<?php

abstract class Head{
    abstract public function chiama();
}

class Jarvis extends Head{

    public function chiama(){

        echo "Chiama Jarvis\n";

    }


}



?>
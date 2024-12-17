<?php


// $



abstract class Category{

    abstract public function getMyCategory();


}


class Attualità extends Category{

    public function getMyCategory(){
        return "Attualità \n";
    }

}

class Sport extends Category{

    public function getMyCategory(){
        return "Sport\n";
    }

}

class Gossip extends Category{

    public function getMyCategory(){
        return "Gossip\n";
    }

}

class Storia extends Category{

    public function getMyCategory(){
        return "Storia\n";
    }

}


$sport = new Sport();

echo $sport->getMyCategory();
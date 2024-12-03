<?php

// $

$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
  ];

// var_dump($users[0]["gender"]);

  if($users[0]["gender"] == "M"){
    echo "Buongiorno Sig. " . $users[0]["name"] . " " . $users[0]["surname"];

  } elseif($users[0]["gender"] == "F"){
    echo "Buongiorno Sig.ra " . $users[0]["name"] . " " . $users[0]["surname"];
  } elseif($users[0]["gender"] == "NB"){
    echo "Buongiorno " . $users[0]["name"] . " " . $users[0]["surname"];
  }





?>
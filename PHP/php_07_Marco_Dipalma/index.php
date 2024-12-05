<?php

// $


function checkLenght($passw){

    if(strlen($passw)>=8){
        // echo "la password è lunga almeno 8 caratteri \n";
        return true;
    }
    // else{
    //     echo "la password deve essere lunga almeno 8 caratteri \n";
    //     return false;
    // }
}

function checkNumber($passw){

    for($i=0; $i<strlen($passw); $i++){
        if (is_numeric($passw[$i])){
            // echo "la password contiene almeno un numero \n";
            return true;
        } 
        // else{
        //     echo "la password deve contenere almeno un numero \n";
        //     return false;
        // }
    }

}

function checkUpperCase($passw){

    for($i=0; $i<strlen($passw); $i++){
        if (ctype_upper($passw[$i])){
            // echo "la password contiene almeno un carattere maiuscolo \n";
            return true;
        } 
        // else{
        //     echo "la password deve contenere almeno un carattere maiuscolo \n";
        //     return false;
        // }
    }

}



function checkSpecialChar($passw){
    
    $specialChars = ["_", "!", "£", "$", "%", "&", "?", "@", "§", "."];

    for ($i=0; $i < strlen($passw); $i++) { 
        if(in_array($passw[$i], $specialChars)){
            // echo "la password contiene almeno un carattere speciale \n";
            return true;
        }
        // else{
        //     echo "la password deve contenere almeno un carattere speciale \n";
        //     return false;
        // }
    }

}


function checkPassword($passw){

    $firstCheck = checkLenght($passw);
    $secondCheck = checkNumber($passw);
    $thirdCheck = checkUpperCase($passw);
    $fourthCheck = checkSpecialChar($passw);



    if(!$firstCheck){
        echo "la password deve contenere almeno 8 caratteri \n";
    } elseif(!$secondCheck){
        echo "la password deve contenere almeno un numero \n";
    } elseif(!$thirdCheck){
        echo "la password deve contenere almeno un carattere maiuscolo \n";
    } elseif(!$fourthCheck){
        echo "la password deve contenere almeno un carattere speciale \n";
    }else{
        echo "la password è stata inserita correttamente \n";
    }

    return $firstCheck && $secondCheck && $thirdCheck && $fourthCheck;

}


do {

    $password = readline('Inserisci password: ');

} while (!checkPassword($password));






?>
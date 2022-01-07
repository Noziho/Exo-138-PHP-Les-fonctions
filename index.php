<?php

// Premiere ligne

function helloWorld (){
    echo "Hello World!";
}

//Deuxieme ligne
helloWorld();


//Troisieme ligne

function maFonctionParam($fname, $lname) {
    echo $fname ."<br><br>";
    return  $lname ."<br><br>";

}

maFonctionParam("jecpa", "okok");
$monReturn = maFonctionParam("cc", "Mon return");
echo $monReturn;






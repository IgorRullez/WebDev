<?php

$a = 3; //Atribui os valores as variaveis
$b = 4;

echo ($a * $b); //Imprime as variaveis B e B

$colours = ['red', 'yellow', 'green']; // Array
echo '<p>' . 'Colour: ' . $colours[0] . '.<p>';  //O zero e onde tudo comeca, logo 0 = red, 1 = yellow, etc.

function toast($bread) //funcao para imprimir na tela.
{
    echo '<p>' . 'Toast ' . $bread . '.<p>';
}

$KindsOfBread = ['banana bread' , 'rye' , 'white', 'sourdough'];

foreach($KindsOfBread as $bread)
 {
 toast($bread);
 }

function Car($Cars){
    echo '<p>' . 'Car: ' . $Cars . '.<p>';
}


echo '<ul>';

 $DreamCars = ['WRX STI' , 'RS3' , 'RS4' , 'A45 S' , 'C63 S AMG', '911 GT3 RS', 'Macan GTS', 'Supra' , 'Skyline GT-R R34' , 'GT-R R35' , 'M2 CSL' , 'M4 Competition' , 'Giulia Quadrifoglio' , 'M135i', 'Corvette Stingray' , 'Camaro Z28', 'Sesto Elemento' , 'Intenza Emozione' , 'Civic Type R' , 'Golf R32'];

 foreach($DreamCars as $cars){
     WrapperContent($cars);
 }

function WrapperContent($content)

{
    echo '<li>' . 'Cars: '. $content . '</li>';
}
'</ul>';
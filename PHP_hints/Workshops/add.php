<?php


$cities = ['rabat','sale','london'];

//echo $cities[0] . $cities[1];

echo '<pre>';

$city = array_rand($cities); // return an integer ==> la position des valeurs d'un tableau

echo  $cities[$city];

// print_r($cities);

// array_push($cities,"london","new york","boston");

// print_r($cities);

// array_unshift($cities,'amsterdam','algerie');

// print_r($cities);

// //removing items

// $removed = array_pop($cities);
 
// print_r($removed);

// $removefromtop = array_shift($cities);

// print_r($removedfromtop);


//strings method returning arrays


// $word = "lundi";
// $letter = str_split($word);
// $let = str_split($word,2);

// echo '<pre>';
// print_r($letter);
// print_r($let);

// $alphabet = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];

// $result = array_slice($alphabet,0,6);

// $result1 = array_slice($alphabet, -6,6);

// print_r($result1);


$names = array('tijani'=>32,'moly'=>18,'amine'=>40);

echo '<pre>';

print_r($names);

foreach($names as $key=>$value){

     echo $key .' is ' . $value . ' years old'.'<br />'; 

}


//method math 

// rand(1,100) , round($valeur,2) , pow(5,6),


//method CHR() 

//la methode CHR(codeAscii) 

//boucle entre le code ascci dial a vers le code ascci dial Z {


//prendre le code Asccii et l'afficher comme alphabet
$str = 'motdepasse';
$res = md5($str);
echo $res;
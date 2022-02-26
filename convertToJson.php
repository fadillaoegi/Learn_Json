<?php

// $game = [

//     [
//         "adventure" =>  "Prince Of Persia",
//         "farming"   =>  "Harvest Moon",
//         "online"    =>  "Ninja Saga"
//     ],

//     [
//         "adventure" =>  "Prince Of Persia",
//         "farming"   =>  "Harvest Moon",
//         "online"    =>  "Ninja Saga"
//     ]

// ];

// var_dump($game);

// // Convert to Json From array
// $dataGame = json_encode($game); echo "<br>";

// echo $dataGame;

// Convert to Json from DataBase
$dataBase = new PDO('mysql:host=localhost;dbname=db_spksmart', 'root', '');
$db = $dataBase->prepare('SELECT * FROM kriteria');
$db->execute();
$kriteria = $db->fetchAll(PDO::FETCH_ASSOC);

$convertDb = json_encode($kriteria);

echo $convertDb;

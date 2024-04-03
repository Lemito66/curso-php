<?php

echo "Hola Mundo";

// variables
$name = "Emill";
$age = 25;
$price = 10.5;
$isDev = true;

// Con comillas dobles permite interpolar variables con comillas simples no

$output = "Hola $name tienes $age años";

// Concatenar con comillas dobles o con el punto
$output = "Hola " . $name . " tienes " . $age . " años";

// Constantes no pueden cambiar su valor y se definen con define
define("PI", 3.1416);

const PI_VALUE = 3.1416;



// condicionales
if ($age >= 18) {
    echo "Eres mayor de edad";
} else {
    echo "Eres menor de edad";
}

// ternarias
$isOld = $age >= 18 ? true : false;

$outputAge = match (true) {
    $age < 2 => "Eres un bebe $name",
    $age < 12 => "Eres un niño $name",
    $age < 18 => "Eres un adolescente $name",
    default => "Eres un adulto $name"
};

// Arrays
$colors = array("red", "green", "blue");
$colors = ["red", "green", "blue"];
$colors[2] = "yellow";
$colors[] = "black";

$person = [
    "name" => "Emill",
    "age" => 25,
    "isDev" => true
];

$person["name"] = "Emill";


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>

<body>
    <h1><?= "Hola: " . $name ?> </h1>
    <h2><?= $outputAge ?></h2>

    <ul>
        <?php foreach ($colors as $key => $color) : ?>
            <li><?= $key . " " . $color ?></li>
        <?php endforeach; ?>
    </ul>
    <h2>Emill</h2>
</body>

</html>
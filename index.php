<?php

require_once 'SimpsonsCars.php';
require_once 'Bicycles.php';

//Instantiation of a new SimpsonsCar object, PINK SEDAN (color, nb of seats and fuel)
$pinkSedan = new SimpsonsCars('pink', 5, 'petrol');

echo "<br>PINK SEDAN: <br>" . PHP_EOL;
echo $pinkSedan->start() . '<br>' . PHP_EOL;
echo 'Vitesse de la voiture : ' . $pinkSedan->getCurrentSpeed() . ' km/h' . '<br>';
echo $pinkSedan->forward() . '<br>' . PHP_EOL;
echo $pinkSedan->brake() . '<br>' . PHP_EOL;
echo 'Vitesse de la voiture : ' . $pinkSedan->getCurrentSpeed() . ' km/h' . '<br>';


//Instantiation of a new SimpsonsCar object, KRUSTY's PORSCHE (color, nb of seats and fuel)
$krustyPorsche = new SimpsonsCars('grey', 2, 'diesel oil');

echo "<br>KRUSTY's PORSCHE: <br>" . PHP_EOL;
echo $krustyPorsche->start() . '<br>' . PHP_EOL;
echo 'Vitesse de la voiture : ' . $krustyPorsche->getCurrentSpeed() . ' km/h' . '<br>';
echo $krustyPorsche->forward() . '<br>' . PHP_EOL;
echo $krustyPorsche->brake() . '<br>' . PHP_EOL;
echo 'Vitesse de la voiture : ' . $krustyPorsche->getCurrentSpeed() . ' km/h' . '<br>';

//Instantiation of a new Bicycle object, BIKE (color, current speed)
$bike = new Bicycles("blue", 15);

echo "<br> BIKE: <br>" . PHP_EOL;
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>' . PHP_EOL;
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';


//Instantiation of a new Bicycle object, ROCKRIDER (color, current speed)
$rockrider = new Bicycles("yellow", 20);

echo "<br>ROCKRIDER: <br>" . PHP_EOL;
echo $rockrider->forward();
echo '<br> Vitesse du vélo : ' . $rockrider->getCurrentSpeed() . ' km/h' . '<br>';
echo $rockrider->brake();
echo '<br> Vitesse du vélo : ' . $rockrider->getcurrentSpeed() . ' km/h' . '<br>';


//Instantiation of a new Bicycle object, TORNADO (color, current speed)
$tornado = new Bicycles("black", 30);

echo "<br>TORNADO: <br>" . PHP_EOL;
echo $tornado->forward();
echo '<br> Vitesse du vélo : ' . $tornado->getCurrentSpeed() . ' km/h' . '<br>';
echo $tornado->brake();
echo '<br> Vitesse du vélo : ' . $tornado->getcurrentSpeed() . ' km/h' . '<br>';

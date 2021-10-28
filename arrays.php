<?php
/*$autos = array("Volvo", "BMW", "Toyota");

echo "I like " . $autos[0] . ", " . $autos[1] . " and " . $autos[2] . ".";

array_push($autos, "Honda");

echo "I like " . $autos[0] . ", " . $autos[1] . " and " . $autos[2] . "." . $autos[3] . "."; */

//Array Multidimensional

/*$autos = array(
    array("Fort", 22000, 2018), // 0
    array("Volvo", 23000, 2019),// 1
    array("BMW", 24000, 2020), // 2
    array("Toyota", 25000, 2021),// 3
    array("Honda", 26000, 2022),// 4
    array("Ford", 27000, 2023)// 5
);

$model = $autos[1][0] . "<br>";
$price = $autos[1][1] . "<br>";

echo "Auto: " . $model . "Precio: $" . $price; */

include('auto.php');

$auto = new Auto("Ford","100000","2017"); // object auto
$auto1 = new Auto("Toyota","200000","2018");


echo $auto->precio;
?>

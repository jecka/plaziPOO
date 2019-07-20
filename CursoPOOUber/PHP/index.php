<?php
require_once("car.php");
require_once("UberX.php");
require_once("UberPool.php");
require_once("Account.php");

$UbeX = new UberX("CVS123", new Account("Andres Herrera","AND235","Chevrolet","Spark"));
$UberX->printDataCar();

$UberPool = new UberPool("CVS123", new Account("Andrea Ferran","AND235","Dodge","A"));
$UberPool->printDataCar();
?>
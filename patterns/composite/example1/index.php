<?php
require_once  __DIR__ . '/../../../autoload.php';

$mainArmy = new \patterns\composite\example1\Army();
$mainArmy->addUnit(new \patterns\composite\example1\Archer());
$mainArmy->addUnit(new \patterns\composite\example1\LaserCannonUnit());

$subArmy = new \patterns\composite\example1\Army();
$subArmy->addUnit(new \patterns\composite\example1\Archer());
$subArmy->addUnit(new \patterns\composite\example1\Archer());
$subArmy->addUnit(new \patterns\composite\example1\Archer());

$mainArmy->addUnit($subArmy);

echo 'сила: ' . $mainArmy->bombardStrength();

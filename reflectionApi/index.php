<?php
require_once  __DIR__ . '/../autoload.php';


//ReflectionClass::class для исследования класса
//ReflectionMethod::class для исследования методов класса. методы можно получить ReflectionClass::getMethods();


$product = new ReflectionClass(\objects\CdProduct::class);
//Reflection::export($product);

//print \reflectionApi\ClassInfo::getData($product);

print \reflectionApi\ReflectionUtil::getClassSource($product);
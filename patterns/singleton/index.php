<?php
require_once  __DIR__ . '/../../autoload.php';

$pref = \patterns\singleton\Preferences::getInstance();
$pref->setProperty('name', 'Safuan');

unset($pref);

$pref2 = \patterns\singleton\Preferences::getInstance();
echo $pref2->getProperty('name');


$s1 = \patterns\singleton\Singleton::getInstance();
$s2 = \patterns\singleton\Singleton::getInstance();
if ($s1 === $s2) {
    echo "Singleton works, both variables contain the same instance.";
} else {
    echo "Singleton failed, variables contain different instances.";
}
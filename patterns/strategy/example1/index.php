<?php
require_once  __DIR__ . '/../../../autoload.php';

$lesson =new \patterns\strategy\example1\Seminar(4, new \patterns\strategy\example1\TimedCostStrategy());
//echo 'Оплата за занятие: ' . $lesson->cost() . '. Тип оплаты: ' . $lesson->chargeType();

$lecture =new \patterns\strategy\example1\Lecture(4, new \patterns\strategy\example1\FixedCostStrategy());
//echo 'Оплата за занятие: ' . $lecture->cost() . '. Тип оплаты: ' . $lecture->chargeType();

$mgr = new \patterns\strategy\example1\RegistrationMgr();
$mgr->register($lesson);
$mgr->register($lecture);
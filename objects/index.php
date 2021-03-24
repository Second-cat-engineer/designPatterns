<?php
require_once  __DIR__ . '/../autoload.php';

use objects\BookProduct;

$php_object_patterns_practice = new BookProduct(
    'PHP: objects, patterns, practices',
    'Matt',
    'Zandstra',
    2000,
    736
);

var_dump($php_object_patterns_practice->getPrice());
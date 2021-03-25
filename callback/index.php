<?php
require_once  __DIR__ . '/../autoload.php';

$logger = function ($product) {
    echo $product->name;
};

$processor = new \callback\ProcessSale();
$processor->registerCallback($logger);
$processor->sale(new \callback\Product('ball', 120));
$processor->sale(new \callback\Product('book', 12));


$m = new \callback\ProcessSale();
$m->registerCallback([new \callback\Mailer(), 'doMail']);
$m->sale(new \callback\Product('pen', 1));

$t = new \callback\ProcessSale();
$t->registerCallback(\callback\Totalizer::warnAmount());
$t->sale(new \callback\Product('article', 102));

$t2 = new \callback\ProcessSale();
$t2->registerCallback(\callback\Toralizer2::warnAmount(1000));
$t2->sale(new \callback\Product('article', 102));
$t2->sale(new \callback\Product('articles', 1020));
<?php
require_once  __DIR__ . '/../../../autoload.php';

use patterns\abstractfactory\example2\Page;
use patterns\abstractfactory\example2\PHPTemplateFactory;

$page = new Page('Sample page', 'This it the body.');

echo "Testing actual rendering with the PHPTemplate factory:\n";
echo $page->render(new PHPTemplateFactory());
<?php
require_once  __DIR__ . '/../../../autoload.php';

$mgr = new \patterns\factorymethod\example1\BloggsCommsManager();
echo $mgr->getHeaderText();
echo $mgr->getApptEncoder()->encode();
echo $mgr->getFooterText();
<?php
function my__app__autoload($class)
{
    $filename = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if(file_exists($filename)){
        include $filename;
    }
}
spl_autoload_register('my__app__autoload');
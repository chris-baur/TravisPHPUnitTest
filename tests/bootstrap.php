<?php
function loader($class)
{
    $file = $class . '.php';
    echo $class.'\n';
    if (file_exists($file)) {
        require $file;
    }
}
spl_autoload_register('loader');
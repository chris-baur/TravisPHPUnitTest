<?php
function loader($class)
{
    $file = $class . '.php';
    echo 'The class is: '.$class;
    $file = '\private\\'.$file;
    if (file_exists($file)) {
        require $file;
    }
}
spl_autoload_register('loader');
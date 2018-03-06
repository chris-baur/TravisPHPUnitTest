<?php
function loader($class)
{
    $file = $class . '.php';
    echo 'The class is: '.$class;
    echo 'The directory path is: '. __DIR__;    
    //$file = '\private\\'.$file;
    if (file_exists($file)) {
        require $file;
    }
}
spl_autoload_register('loader');
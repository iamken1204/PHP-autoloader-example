<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

/**
 * @see http://justericgg.logdown.com/posts/196891-php-series-autoload
 */
function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= $className . '.php';
    require __DIR__ . DIRECTORY_SEPARATOR . $fileName;
}

spl_autoload_register('autoload');

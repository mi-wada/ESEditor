<?php
spl_autoload_register(function ($className) {
    $prefixes = [
        'controllers_',
    ];
    $match = false;
    foreach ($prefixes as $prefix) {
        if (strpos(strtolower($className), $prefix) === 0) {
            $match = true;
            break;
        }
    }
    if ($match === false) {
        return;
    }

    $className = strtolower($className);
    $separatedClassName = explode('_', $className);
    require_once __DIR__ . DS . implode(DS, $separatedClassName) . '.php';
});

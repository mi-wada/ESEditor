<?php
spl_autoload_register(function ($className) {
    $className = strtolower($className);
    $separatedClassName = explode('_', $className);
    require_once __DIR__ . DS . implode(DS, $separatedClassName) . '.php';
});

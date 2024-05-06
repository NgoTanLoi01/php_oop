<?php
spl_autoload_register(function ($class) {
    $namespace  = "App\\";
    $path = "app";
    $class = str_replace('App\\', '', $class);
    $file = __DIR__ . DIRECTORY_SEPARATOR . $path;
    $file = $file . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (file_exists($file)) {
        include($file);
    }
});

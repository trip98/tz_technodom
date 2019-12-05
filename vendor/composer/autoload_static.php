<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit76c1871edaebd32eb376c814e5369495
{
    public static $classMap = array (
        'app\\DB' => __DIR__ . '/../..' . '/app/model/static/db.php',
        'app\\Pages' => __DIR__ . '/../..' . '/app/controller/dynamic/pages.php',
        'app\\Product' => __DIR__ . '/../..' . '/app/model/dynamic/products.php',
        'app\\Products' => __DIR__ . '/../..' . '/app/controller/dynamic/products.php',
        'app\\Route' => __DIR__ . '/../..' . '/app/controller/static/routing.php',
        'app\\Validation' => __DIR__ . '/../..' . '/app/controller/static/validation.php',
        'app\\View' => __DIR__ . '/../..' . '/app/controller/static/view.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit76c1871edaebd32eb376c814e5369495::$classMap;

        }, null, ClassLoader::class);
    }
}
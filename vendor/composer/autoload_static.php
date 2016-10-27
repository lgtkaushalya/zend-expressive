<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit31c0029a793b723481b3df07a0f0da4e
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\Stratigility\\' => 18,
            'Zend\\Stdlib\\' => 12,
            'Zend\\ServiceManager\\' => 20,
            'Zend\\Expressive\\Template\\' => 25,
            'Zend\\Expressive\\Router\\' => 23,
            'Zend\\Expressive\\' => 16,
            'Zend\\Escaper\\' => 13,
            'Zend\\Diactoros\\' => 15,
            'Zend\\Config\\' => 12,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
        'A' => 
        array (
            'Application\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\Stratigility\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-stratigility/src',
        ),
        'Zend\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-stdlib/src',
        ),
        'Zend\\ServiceManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-servicemanager/src',
        ),
        'Zend\\Expressive\\Template\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-expressive-template/src',
        ),
        'Zend\\Expressive\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-expressive-router/src',
            1 => __DIR__ . '/..' . '/zendframework/zend-expressive-fastroute/src',
        ),
        'Zend\\Expressive\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-expressive/src',
        ),
        'Zend\\Escaper\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-escaper/src',
        ),
        'Zend\\Diactoros\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-diactoros/src',
        ),
        'Zend\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-config/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'Application\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit31c0029a793b723481b3df07a0f0da4e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit31c0029a793b723481b3df07a0f0da4e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

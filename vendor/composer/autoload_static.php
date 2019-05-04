<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4e7576409f49e4f2433d3b467093aed6
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'MySQLHandler\\' => 13,
            'Monolog\\' => 8,
        ),
        'F' => 
        array (
            'FcPhp\\Autoload\\Test\\' => 20,
            'FcPhp\\Autoload\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'MySQLHandler\\' => 
        array (
            0 => __DIR__ . '/..' . '/wazaari/monolog-mysql/src/MySQLHandler',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'FcPhp\\Autoload\\Test\\' => 
        array (
            0 => __DIR__ . '/..' . '/00f100/fcphp-autoload/tests',
        ),
        'FcPhp\\Autoload\\' => 
        array (
            0 => __DIR__ . '/..' . '/00f100/fcphp-autoload/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4e7576409f49e4f2433d3b467093aed6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4e7576409f49e4f2433d3b467093aed6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

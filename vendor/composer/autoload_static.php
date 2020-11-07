<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfbf38c13aaefaba3b1a8795ebe6a99bf
{
    public static $files = array (
        '3917c79c5052b270641b5a200963dbc2' => __DIR__ . '/..' . '/kint-php/kint/init.php',
    );

    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kint\\' => 5,
        ),
        'A' => 
        array (
            'App\\src\\' => 8,
            'App\\config\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kint\\' => 
        array (
            0 => __DIR__ . '/..' . '/kint-php/kint/src',
        ),
        'App\\src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'App\\config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfbf38c13aaefaba3b1a8795ebe6a99bf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfbf38c13aaefaba3b1a8795ebe6a99bf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

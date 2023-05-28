<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit02e6e2454406263e4561e699d3716a8e
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit02e6e2454406263e4561e699d3716a8e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit02e6e2454406263e4561e699d3716a8e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit02e6e2454406263e4561e699d3716a8e::$classMap;

        }, null, ClassLoader::class);
    }
}
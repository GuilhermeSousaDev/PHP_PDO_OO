<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd4ee4ca372c5ebcb2924f48c67e4b114
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd4ee4ca372c5ebcb2924f48c67e4b114::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd4ee4ca372c5ebcb2924f48c67e4b114::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd4ee4ca372c5ebcb2924f48c67e4b114::$classMap;

        }, null, ClassLoader::class);
    }
}
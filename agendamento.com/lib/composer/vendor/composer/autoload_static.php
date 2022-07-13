<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitce32edcc5c47409bb4d469510b975b11
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../../model',
        ),
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../../class',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitce32edcc5c47409bb4d469510b975b11::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitce32edcc5c47409bb4d469510b975b11::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitce32edcc5c47409bb4d469510b975b11::$classMap;

        }, null, ClassLoader::class);
    }
}
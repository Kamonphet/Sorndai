<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6725daa52856e3d8316eddda286df171
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'a' => 
        array (
            'abeautifulsite' => 
            array (
                0 => __DIR__ . '/..' . '/claviska/simpleimage/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6725daa52856e3d8316eddda286df171::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6725daa52856e3d8316eddda286df171::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit6725daa52856e3d8316eddda286df171::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit6725daa52856e3d8316eddda286df171::$classMap;

        }, null, ClassLoader::class);
    }
}

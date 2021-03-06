<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1542225fd7418bf1eaca4f1e3de5f23
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alec\\LaBananita\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alec\\LaBananita\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite1542225fd7418bf1eaca4f1e3de5f23::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite1542225fd7418bf1eaca4f1e3de5f23::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite1542225fd7418bf1eaca4f1e3de5f23::$classMap;

        }, null, ClassLoader::class);
    }
}

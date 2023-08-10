<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite619d011e01e9b29496280e86ac9527a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Admin\\Php\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Admin\\Php\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite619d011e01e9b29496280e86ac9527a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite619d011e01e9b29496280e86ac9527a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite619d011e01e9b29496280e86ac9527a::$classMap;

        }, null, ClassLoader::class);
    }
}

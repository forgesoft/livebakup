<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1aa20cad1ebddc39332071063c6d9b5
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Monolog',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite1aa20cad1ebddc39332071063c6d9b5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite1aa20cad1ebddc39332071063c6d9b5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

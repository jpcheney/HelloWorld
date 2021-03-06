<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8a7ca40e724089182c501febcd335c01
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Att\\M2X\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Att\\M2X\\' => 
        array (
            0 => __DIR__ . '/..' . '/attm2x/m2x-php/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'A' => 
        array (
            'Att\\M2X' => 
            array (
                0 => __DIR__ . '/../..' . '/app/vendor/attm2x/m2x-php/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8a7ca40e724089182c501febcd335c01::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8a7ca40e724089182c501febcd335c01::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit8a7ca40e724089182c501febcd335c01::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}

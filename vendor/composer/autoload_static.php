<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite4b3fa5d02afe9b595ca2ef454eb0ad1
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Onburd\\MarketActivation\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Onburd\\MarketActivation\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite4b3fa5d02afe9b595ca2ef454eb0ad1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite4b3fa5d02afe9b595ca2ef454eb0ad1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite4b3fa5d02afe9b595ca2ef454eb0ad1::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc3d8074defd1cf17f4b1e35e140dbfe3
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Isen\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Isen\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Isen',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc3d8074defd1cf17f4b1e35e140dbfe3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc3d8074defd1cf17f4b1e35e140dbfe3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

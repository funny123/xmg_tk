<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdd9b563ddb598092e35eb428e4790cd1
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\composer\\' => 15,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-installer/src',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdd9b563ddb598092e35eb428e4790cd1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdd9b563ddb598092e35eb428e4790cd1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

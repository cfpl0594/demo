<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit99f7ae0923c8150ca6ae1afc9fe61aaf
{
    public static $files = array (
        '71de9acd835be3f1538235dc9f3cfa9b' => __DIR__ . '/../..' . '/core/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'web\\' => 4,
        ),
        'c' => 
        array (
            'core\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Component\\Finder\\' => 25,
        ),
        'G' => 
        array (
            'Gregwar\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'web\\' => 
        array (
            0 => __DIR__ . '/../..' . '/web',
        ),
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Gregwar\\' => 
        array (
            0 => __DIR__ . '/..' . '/gregwar/captcha/src/Gregwar',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit99f7ae0923c8150ca6ae1afc9fe61aaf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit99f7ae0923c8150ca6ae1afc9fe61aaf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

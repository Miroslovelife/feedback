<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit24fdcdd847c1046b816d6c448aac543a
{
    public static $files = array (
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Yaml\\' => 23,
        ),
        'M' => 
        array (
            'Miroslav\\Feedback\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Miroslav\\Feedback\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit24fdcdd847c1046b816d6c448aac543a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit24fdcdd847c1046b816d6c448aac543a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit24fdcdd847c1046b816d6c448aac543a::$classMap;

        }, null, ClassLoader::class);
    }
}

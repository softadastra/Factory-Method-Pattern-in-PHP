<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit811489e7a38c510b470a8bf36a2bfa40
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Adastra\\Design\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Adastra\\Design\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit811489e7a38c510b470a8bf36a2bfa40::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit811489e7a38c510b470a8bf36a2bfa40::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit811489e7a38c510b470a8bf36a2bfa40::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita1c5c69b34ad6829e2b9144ce1794f1d
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInita1c5c69b34ad6829e2b9144ce1794f1d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita1c5c69b34ad6829e2b9144ce1794f1d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita1c5c69b34ad6829e2b9144ce1794f1d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
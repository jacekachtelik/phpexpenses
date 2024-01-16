<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInited5721ef22ad8f9d175d9fe290d12652
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

        spl_autoload_register(array('ComposerAutoloaderInited5721ef22ad8f9d175d9fe290d12652', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInited5721ef22ad8f9d175d9fe290d12652', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInited5721ef22ad8f9d175d9fe290d12652::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
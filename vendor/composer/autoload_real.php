<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitea9dd31990f3eabbae616e12dac4f2bd
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

        spl_autoload_register(array('ComposerAutoloaderInitea9dd31990f3eabbae616e12dac4f2bd', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitea9dd31990f3eabbae616e12dac4f2bd', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitea9dd31990f3eabbae616e12dac4f2bd::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

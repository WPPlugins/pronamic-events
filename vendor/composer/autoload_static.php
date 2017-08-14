<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit14b4733490bbcdde9435c59369951a69
{
    public static $prefixesPsr0 = array (
        'x' => 
        array (
            'xrstf\\Composer52' => 
            array (
                0 => __DIR__ . '/..' . '/xrstf/composer-php52/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Pronamic_DateEvent' => __DIR__ . '/../..' . '/classes/class-date-event.php',
        'Pronamic_DateEventInterface' => __DIR__ . '/../..' . '/classes/class-date-event-interface.php',
        'Pronamic_Events_Plugin' => __DIR__ . '/../..' . '/classes/class-plugin.php',
        'Pronamic_Events_Plugin_Admin' => __DIR__ . '/../..' . '/classes/class-admin.php',
        'Pronamic_Events_RepeatEventHelper' => __DIR__ . '/../..' . '/classes/class-repeat-event-helper.php',
        'Pronamic_Events_RepeatModule' => __DIR__ . '/../..' . '/classes/class-repeat-module.php',
        'Pronamic_Events_RepeatModule_Admin' => __DIR__ . '/../..' . '/classes/class-repeat-module-admin.php',
        'Pronamic_Events_Widget' => __DIR__ . '/../..' . '/classes/class-widget.php',
        'Pronamic_WP_Event' => __DIR__ . '/../..' . '/classes/class-event.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit14b4733490bbcdde9435c59369951a69::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit14b4733490bbcdde9435c59369951a69::$classMap;

        }, null, ClassLoader::class);
    }
}
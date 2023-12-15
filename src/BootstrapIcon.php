<?php

namespace algsupport\BootstrapIcons;

class BootstrapIcon
{
    /**
     * CSS class prefix
     * @var string
     */
    public static string $cssPrefix = 'bi';

    /**
     * CSS class prefix
     * @var string
     */
    public static string $basePrefix = 'bi';


    public static function icon($name, $options = []): Icon
    {
        return new Icon(static::$cssPrefix, $name, $options);
    }

}
<?php

namespace algsupport\BootstrapIcons;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class Icon
{
    /**
     * @var array
     */
    private array $options;

    /**
     * @param string $cssPrefix
     * @param string $name
     * @param array $options
     */
    public function __construct(string $cssPrefix, string $name, array $options = [])
    {
        Html::addCssClass($options, $cssPrefix);

        if (!empty($name)) {
            Html::addCssClass($options, BootstrapIcon::$basePrefix . '-' . $name);
        }

        $this->options = $options;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $options = $this->options;

        $tag = ArrayHelper::remove($options, 'tag', 'i');

        return Html::tag($tag, null, $options);
    }
}

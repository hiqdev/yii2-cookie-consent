<?php

namespace hiqdev\yii2\CookieConsent\assets;

use yii\bootstrap\BootstrapAsset;
use yii\web\AssetBundle;

class DefaultPage extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@hiqdev/yii2/CookieConsent/assets/';

    /**
     * @inherit
     */
    public $css = [
        'css/default.css'
    ];

    /**
     * @inherit
     */
    public $depends = [
        BootstrapAsset::class,
    ];
}

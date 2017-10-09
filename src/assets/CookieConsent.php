<?php

namespace hiqdev\yii2\CookieConsent\assets;

use yii\web\AssetBundle;

class CookieConsent extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@bower/cookieconsent2/build/';

    /**
     * @inherit
     */
    public $js = [
        'cookieconsent.min.js',
    ];

    /**
     * @inherit
     */
    public $depends = [
        \yii\web\YiiAsset::class,
        \yii\bootstrap\BootstrapAsset::class,
        \yii\bootstrap\BootstrapPluginAsset::class,
    ];
}

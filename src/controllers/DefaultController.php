<?php

namespace hiqdev\yii2\CookieConsent\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public $layout = '@hiqdev/yii2/CookieConsent/views/layouts/main';

    public function actionDefault()
    {
        return $this->render('default');
    }
}

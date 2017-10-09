<?php

namespace hiqdev\yii2\CookieConsent;

use Yii;

class CodeBuilder
{
    public $id;

    public $params = [];

    public function getView()
    {
        return Yii::$app->getView();
    }

    public function render()
    {
        return $this->getView()->render('@hiqdev/yii2/CookieConsent/views/code.php', $this->prepareData());
    }

    public function prepareData()
    {
        return [
            'id' => $this->id,
            'params' => array_merge($this->prepareParams(), [
                'domain' => Yii::$app->request->hostInfo,
                'container' => null,
                'path' => '/',
                'expiryDays' => 365,
            ]),
        ];
    }

    public function prepareParams()
    {
        return array_filter(array_merge($this->params, [
            'id' => $this->id,
        ]));
    }
}

<?php

namespace hiqdev\yii2\CookieConsent;

use Yii;
use yii\web\View;

class Behavior extends \yii\base\Behavior
{
    public $builder;

    public function events()
    {
        return [
            View::EVENT_END_BODY => 'onEndBody',
        ];
    }

    public function onEndBody($event)
    {
        echo $this->getBuilder()->render();
    }

    public function getBuilder()
    {
        if (!is_object($this->builder)) {
            $this->builder = Yii::createObject($this->builder);
        }

        return $this->builder;
    }
}

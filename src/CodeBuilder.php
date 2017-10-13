<?php

namespace hiqdev\yii2\CookieConsent;

use Yii;
use yii\helpers\Url;

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
        $request = Yii::$app->request;
        $data = $this->prepareData();
        if ($data['params']['missingCookieUrl'] !== $request->getUrl()) {
            return $this->getView()->render('@hiqdev/yii2/CookieConsent/views/code.php', $data);
        }
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
        $params = [
            'id' => $this->id,
        ];
        if ($this->params['missingCookieUrl'] === 'default') {
            $params['missingCookieUrl'] = Url::toRoute(['@cookieConsent/default']);
        }
        return array_filter(array_merge($this->params, $params));
    }
}

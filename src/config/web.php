<?php
/**
 * Yii2 Cookie Consent
 *
 * @link      https://github.com/hiqdev/yii2-cookie-consent
 * @package   yii2-cookie-consent
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2014-2017, HiQDev (http://hiqdev.com/)
 */

return $params['cookieConsent.disabled'] ? [] : [
    'components' => [
        'view' => [
            'as CookieConsent' => [
                'class' => \hiqdev\yii2\CookieConsent\Behavior::class,
                'builder' => [
                    'class' => \hiqdev\yii2\CookieConsent\CodeBuilder::class,
                    'params' => $params['cookieConsent.params'],
                ],
            ],
        ],
    ],
];

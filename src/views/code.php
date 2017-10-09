<?php

/**
 * @var $params array
 */

use hiqdev\yii2\CookieConsent\assets\CookieConsent;

CookieConsent::register($this);

if ($params['missingCookieUrl']) {
    $this->registerJs("if (navigator.cookieEnabled === false) window.location.replace(\"{$params['missingCookieUrl']}\");");
}

$codeJS = "window.cookieconsent_options = { message: '{$params['message']}', dismiss: '{$params['dismiss']}', learnMore: '{$params['more']}', link: '{$params['moreLink']}', theme: '{$params['theme']}', container: '{$params['container']}', path: '{$params['path']}',";
if ($domain) {
    $codeJS .= " domain: '{$params['domain']}',";
}

$codeJS .= " expiryDays: {$params['expiryDays']} };";

$this->registerJs($codeJS);

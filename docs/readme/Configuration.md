This extension is supposed to be used with [composer-config-plugin].

Else look [src/config/web.php] for cofiguration example.

Available configuration parameters:

- `cookieConsent.disabled`
- `cookieConsent.params`
    - `message` - message to be shown
    - `dismiss`
    - `theme`
    - `more`
    - `moreLink`
    - `failUrl` - url user will be redirected when cookies are disabled

For more details please see [src/config/params.php].

[composer-config-plugin]:   https://github.com/hiqdev/composer-config-plugin
[src/config/web.php]:       src/config/web.php
[src/config/params.php]:    src/config/params.php

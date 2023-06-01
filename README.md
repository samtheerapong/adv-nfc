<p align="center">
    <a href="#" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Advanced Project Template</h1>
    <h2 align="center">NFC-MASTER</h2>
    <br>
</p>
-------------------

# backend & frontend main-local.php
```
'urlManager' => [
    'class' => 'yii\web\urlManager',
    'enablePrettyUrl' => true,
    'showScriptName' => false,
        'rules' => [
            '<controller:\w+>/<id:\d+>' => '<controller>/view',
            '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
            '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ['class' => 'yii\rest\UrlRule', 'controller' => 'location', 'except' => ['delete', 'GET', 'HEAD', 'POST', 'OPTIONS'], 'pluralize' => false],
            '<module:\w+>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>',
        ],
    ],
```

# web/.htacess 
```
Options +FollowSymLinks
RewriteEngine On

# If a directory or a file exists, use it directly
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d

# Otherwise, redirect everything to index.php
RewriteRule . index.php

```

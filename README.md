<p align="center">
    <a href="#" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Advanced Project Template</h1>
    <h2 align="center">NFC-MASTER</h2>
    <br>
</p>
-------------------

## เปลี่ยน URL แบบสวยงาม 
ปิดใช้งาน index.php?r=
แก้ไขไฟล์ backend & frontend main-local.php ใน components
```php
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

แล้วเพิ่มไฟล์ web/.htacess 
```php
Options +FollowSymLinks
RewriteEngine On

# If a directory or a file exists, use it directly
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d

# Otherwise, redirect everything to index.php
RewriteRule . index.php

```
 
## ทำเว็บ2ภาษา
```
php yii message/config @backend/config/i18n.php
php yii message/config @fontend/config/i18n.php
```
สร้างไฟล์ file backend\massages\th\app.php
สร้างไฟล์ file fontend\massages\th\app.php

```php
<?php
return [
    // *** ตัวอย่าง
    'Home' => 'หน้าหลัก',
    // *** config
    'Fonts' => 'Chakra Petch',

];
```
ใช้งาน
```php
Yii::t('app', 'Home'),
```


## เปลี่ยนเป็น bootstrap5
1. แก้ file config/params.php
```php
<?php
return [
    'bsVersion' => '5',
    'adminEmail' => 'admin@example.com',
];
```
2. แก้ vendor/dektrium ค้นหา bootstrap ให้เปลี่ยนเป็น bootstrap5
ตัวอย่าง
```php
use yii\bootstrap\Nav;

ให้เปลี่ยนเป็น

use yii\bootstrap5\Nav;
```
** ข้อควรระวัง เวลาเปลี่ยน version หรือ composer update อาจจะกลับค่าเดิม

## custom.css

นำไปใส่ใน tag head ของ file main ของ theme
```html
<link href="<?= Yii::$app->request->baseUrl ?>/css/custom.css" rel="stylesheet">
```
แล้วสร้างไฟล์ custom.css ไว้ที่ web/css/custom.css
เปลี่ยน fonts google 
```css
@import url("https://use.fontawesome.com/releases/v5.3.1/css/all.css");
@import url("https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400&&family=Kanit&family=Itim&display=swap");
@import url("https://cdn.jsdelivr.net/npm/sweetalert2@11");

/* font */
* {
  font-family: "Chakra Petch", sans-serif;
  /* font-family: 'Kanit', sans-serif; */
  /* font-family: 'Itim', cursive; */
}
```

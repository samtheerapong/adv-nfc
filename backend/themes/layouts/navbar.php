<?php

use yii\bootstrap5\Nav;
use yii\helpers\Html;

?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="dropdown user user-menu">
            <?php

            $menuItems = [
                [
                    'label' => Yii::t('app', 'Home'),
                    'options' => ['class' => 'requester-link'],
                    'url' => ['/site/index'],
                    // 'visible' => !Yii::$app->user->isGuest,
                ],

                [
                    'label' => Yii::t('app', 'Link'),
                    'options' => ['class' => 'reviewer-link'],
                    'url' => [' '],
                    'visible' => !Yii::$app->user->isGuest,
                ],
                
                [
                    'label' => Yii::t('app', 'Link'),
                    'options' => ['class' => 'approver-link'],
                    'url' => [' '],
                    'visible' => !Yii::$app->user->isGuest,
                ],
            ];
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav'],
                'encodeLabels' => false, // ใช้งาน icon
                'items' => $menuItems,
            ]);
            ?>

        </li>
        <!-- End Level two -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="dropdown user user-menu">
            <?php

            $menuItems = [
                [
                    'label' => Yii::t('app', 'Reports'), 'options' => ['class' => 'report-link'], 'icon' => 'fas fa-chart-pie', 'items' => [
                        ['label' => Yii::t('app', 'categories'), 'icon' => 'circle-o text-primary', 'url' => ['/operator/report/index']],
                        ['label' => Yii::t('app', 'types'), 'icon' => 'circle-o text-primary', 'url' => ['/operator/report/report1']],
                        ['label' => Yii::t('app', 'status'), 'icon' => 'circle-o text-primary', 'url' => ['/operator/report/report2']],
                        ['label' => Yii::t('app', 'Calendar'), 'icon' => 'circle-o text-primary', 'url' => ['/operator/report/report3']],
                    ],
                    'visible' => !Yii::$app->user->isGuest,
                ],

                [
                    'label' => Yii::t('app', 'Backend'),
                    'options' => ['class' => 'backend-link'],
                    'items' => [
                        ['label' => Yii::t('app', 'Manage Requester'), 'url' => ['/operator/requester/index']],
                        ['label' => Yii::t('app', 'categories'), 'url' => ['/operator/categories/index']],
                        ['label' => Yii::t('app', 'departments'), 'url' => ['/operator/departments/index']],
                        ['label' => Yii::t('app', 'points'), 'url' => ['/operator/points/index']],
                        ['label' => Yii::t('app', 'stamps'), 'url' => ['/operator/stamps/index']],
                        ['label' => Yii::t('app', 'status'), 'url' => ['/operator/status/index']],
                        ['label' => Yii::t('app', 'types'), 'url' => ['/operator/types/index']],
                        ['label' => Yii::t('app', 'Auto Number'), 'url' => ['/operator/auto-number/index']],
                        ['label' => Yii::t('app', 'User Manage'), 'url' => ['/user/admin/index']],
                        ['label' => Yii::t('app', 'Permission Manage'), 'url' => ['/person/user/index']],
                        ['label' => Yii::t('app', 'Role Manage'), 'url' => ['/admin/role']],
                    ],
                    'visible' => !Yii::$app->user->isGuest,
                ],

                [
                    'label' => Yii::t('app', 'Register'),
                    'url' => ['/user/registration/register'],
                    'options' => ['class' => 'register-link'],
                    'visible' => Yii::$app->user->isGuest,
                ],

                Yii::$app->user->isGuest ?
                    [
                        'label' => Yii::t('app', 'Log in'),
                        'url' => ['/user/security/login'],
                        'options' => ['class' => 'sign-in-link'],
                    ] :
                    [
                        'label' => empty(Yii::$app->user->identity->profile->name) ? Yii::t('app', 'Account') : '#' . Yii::$app->user->identity->profile->name,
                        'options' => ['class' => 'sign-in-link'],
                        'items' => [
                            ['label' => Yii::t('app', 'Profile'), 'url' => ['/user/settings/profile']],
                            ['label' => Yii::t('app', 'Account'), 'url' => ['/user/settings/account']],
                            [
                                'label' => Yii::t('app', 'Log out'),
                                'url' => ['/user/security/logout'],
                                'linkOptions' => [
                                    'data-method' => 'post',
                                ]
                            ],
                        ]
                    ],
            ];
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav'],
                'encodeLabels' => false, // ใช้งาน icon
                'items' => $menuItems,

            ]);
            ?>

        </li>


        <!-- <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>

    </ul>

</nav>
<!-- /.navbar -->
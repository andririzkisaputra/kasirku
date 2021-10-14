<?php
return [
    'aliases' => [
        '@bower'  => '@vendor/bower-asset',
        '@npm'    => '@vendor/npm-asset',
        '@upload' => '../../upload',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];

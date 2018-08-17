<?php

/**
 * User: Huijiewei
 * Date: 2015-03-31
 * Time: 15:11.
 */

namespace huijiewei\bootbox;

use yii\web\AssetBundle;

class BootboxAsset extends AssetBundle
{
    public $sourcePath = '@npm/bootbox';

    public $js = [
        'bootbox.min.js',
    ];

    public $publishOptions = [
        'only' => [
            '/bootbox.js',
            '/bootbox.min.js',
        ],
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

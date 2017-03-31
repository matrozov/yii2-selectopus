<?php

namespace matrozov\selectopus;

use yii\web\AssetBundle;

/**
 * SelectizeAsset
 *
 * @author Alexander Kochetov <creocoder@gmail.com>
 */
class SelectopusAsset extends AssetBundle
{
    public $sourcePath = '@bower/selectopus/dist';
    public $css = [
        'css/selectopus.min.css',
    ];
    public $js = [
        'js/selectopus.full.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}

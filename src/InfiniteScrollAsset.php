<?php

namespace yiidoc\infinitescroll;

use yii\web\AssetBundle;

class InfiniteScrollAsset extends AssetBundle
{
    public $sourcePath = '@bower/infinite-scroll';
    public $js = [
        'infinite-scroll.pkgd.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
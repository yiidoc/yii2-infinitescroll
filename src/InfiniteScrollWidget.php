<?php

namespace yiidoc\infinitescroll;

use yii\widgets\LinkPager;

class InfiniteScrollWidget extends LinkPager
{
    public $options = [];
    public $clientOptions = [];
    public $clientEvents = [];

    private $_assetBundle;

    public function init()
    {
        $this->getAssetBundle();
    }

    public function run()
    {

    }

    /**
     * @return InfiniteScrollAsset
     */
    public function getAssetBundle()
    {
        if(!$this->_assetBundle){
            $this->_assetBundle = InfiniteScrollAsset::register($this->getView());
        }
        return $this->_assetBundle;
    }

    protected function registerJs()
    {

    }
}
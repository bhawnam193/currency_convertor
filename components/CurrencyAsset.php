<?php
// namespace \CurrencyAsset;

// use yii\web\AssetBundle;
// class CurrencyWidgetAsset extends AssetBundle {
//     public $sourcePath = '@app/components/assets';
//     public $css = ['style.css'];
// }



use yii\web\AssetBundle;

class CurrencyAsset extends AssetBundle
{
    
    public $css = [
        
        'css/style.css'
    ];


    public function init()
    {
        // Tell AssetBundle where the assets files are
        $this->sourcePath = __DIR__ . "/assets";
        parent::init();
    }
}
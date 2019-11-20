<?php
namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;

class CurrencyWidget extends Widget{
    public $base = 'JPY';
    public $convertedCurrency = 'INR';
    public $value;

    public function init(){
        parent::init();          
    }

    public function run(){

        CurrencyAsset::register($this->getView());

                CurrencyAsset::register($this->getView());

        return $this->render('currency', ['base' => $this->base ,'convertedCurrency' => $this->convertedCurrency , 'value' => $this->value ]);
    }
}
?>
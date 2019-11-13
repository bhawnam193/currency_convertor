<?php
namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;

class CurrencyWidget extends Widget{
    public $base;
    public $convertedCurrency;
    public $value;

    public function init(){
        parent::init();
    }

    public function run(){
        return $this->render('currency', ['base' => $this->base ,'convertedCurrency' => $this->convertedCurrency , 'value' => $this->value ]);
    }
}
?>
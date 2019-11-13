<?php
	use app\components\CurrencyWidget;
?>
<?= CurrencyWidget::widget(['base' => 'USD' , 'convertedCurrency' => 'INR' , 'value' => '200']) ?>
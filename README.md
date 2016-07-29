PrintThis for Yii Framework 2
---

Usage
-----
To use this widget, insert the following code into a view file:
```php
<?php
echo PrintThis::widget([
	'htmlOptions' => [
		'id' => 'PrintThis',
		'btnClass' => 'btn btn-info',
		'btnId' => 'btnPrintThis',
		'btnText' => 'พิมพ์หน้านี้',
		'btnIcon' => 'fa fa-print'
	],
	'options' => [
		'debug' => false,
		'importCSS' => true,
		'importStyle' => false,
		'loadCSS' => "path/to/my.css",
		'pageTitle' => "",
		'removeInline' => false,
		'printDelay' => 333,
		'header' => null,
		'formValues' => true,
	]
]);
?>
```

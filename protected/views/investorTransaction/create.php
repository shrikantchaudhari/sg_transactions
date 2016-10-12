<?php
/* @var $this InvestorTransactionController */
/* @var $model InvestorTransaction */

$this->breadcrumbs=array(
	'Investor Transactions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InvestorTransaction', 'url'=>array('index')),
	array('label'=>'Manage InvestorTransaction', 'url'=>array('admin')),
);
?>

<h1>Create InvestorTransaction</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
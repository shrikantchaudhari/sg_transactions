<?php
/* @var $this InvestorTransactionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Investor Transactions',
);

$this->menu=array(
	array('label'=>'Create InvestorTransaction', 'url'=>array('create')),
	array('label'=>'Manage InvestorTransaction', 'url'=>array('admin')),
);
?>

<h1>Investor Transactions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
/* @var $this InvestorTransactionController */
/* @var $model InvestorTransaction */

$this->breadcrumbs=array(
	'Investor Transactions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InvestorTransaction', 'url'=>array('index')),
	array('label'=>'Create InvestorTransaction', 'url'=>array('create')),
	array('label'=>'Update InvestorTransaction', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete InvestorTransaction', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InvestorTransaction', 'url'=>array('admin')),
);
?>

<h1>View InvestorTransaction #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'investor_id',
		'booking_id',
		'transaction_amount',
		'transaction_type',
		'createdOn',
	),
)); ?>

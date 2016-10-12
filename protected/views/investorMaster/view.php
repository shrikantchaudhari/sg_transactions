<?php
/* @var $this InvestorMasterController */
/* @var $model InvestorMaster */

$this->breadcrumbs=array(
	'Investor Masters'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List InvestorMaster', 'url'=>array('index')),
	array('label'=>'Create InvestorMaster', 'url'=>array('create')),
	array('label'=>'Update InvestorMaster', 'url'=>array('update', 'id'=>$model->investor_id)),
	array('label'=>'Delete InvestorMaster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->investor_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InvestorMaster', 'url'=>array('admin')),
);
?>

<h1>View InvestorMaster #<?php echo $model->investor_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'investor_id',
		'name',
		'mobile_no',
		'email',
		'cycle_id',
		'purchase_date',
	),
)); ?>

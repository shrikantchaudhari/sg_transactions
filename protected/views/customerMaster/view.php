<?php
/* @var $this CustomerMasterController */
/* @var $model CustomerMaster */

$this->breadcrumbs=array(
	'Customer Masters'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List CustomerMaster', 'url'=>array('index')),
	array('label'=>'Create CustomerMaster', 'url'=>array('create')),
	array('label'=>'Update CustomerMaster', 'url'=>array('update', 'id'=>$model->customer_id)),
	array('label'=>'Delete CustomerMaster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->customer_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CustomerMaster', 'url'=>array('admin')),
);
?>

<h1>View CustomerMaster #<?php echo $model->customer_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'customer_id',
		'name',
		'mobile_no',
		'email',
		'address',
		'pincode',
	),
)); ?>

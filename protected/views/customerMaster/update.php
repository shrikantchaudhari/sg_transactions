<?php
/* @var $this CustomerMasterController */
/* @var $model CustomerMaster */

$this->breadcrumbs=array(
	'Customer Masters'=>array('index'),
	$model->name=>array('view','id'=>$model->customer_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CustomerMaster', 'url'=>array('index')),
	array('label'=>'Create CustomerMaster', 'url'=>array('create')),
	array('label'=>'View CustomerMaster', 'url'=>array('view', 'id'=>$model->customer_id)),
	array('label'=>'Manage CustomerMaster', 'url'=>array('admin')),
);
?>

<h1>Update CustomerMaster <?php echo $model->customer_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
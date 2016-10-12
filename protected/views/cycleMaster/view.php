<?php
/* @var $this CycleMasterController */
/* @var $model CycleMaster */

$this->breadcrumbs=array(
	'Cycle Masters'=>array('index'),
	$model->cycle_id,
);

$this->menu=array(
	array('label'=>'List CycleMaster', 'url'=>array('index')),
	array('label'=>'Create CycleMaster', 'url'=>array('create')),
	array('label'=>'Update CycleMaster', 'url'=>array('update', 'id'=>$model->cycle_id)),
	array('label'=>'Delete CycleMaster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cycle_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CycleMaster', 'url'=>array('admin')),
);
?>

<h1>View CycleMaster #<?php echo $model->cycle_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cycle_id',
		'brand',
		'model_name',
		'description',
		'nick_name',
		'cycle_price',
	),
)); ?>

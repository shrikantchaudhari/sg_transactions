<?php
/* @var $this CycleMasterController */
/* @var $model CycleMaster */

$this->breadcrumbs=array(
	'Cycle Masters'=>array('index'),
	$model->cycle_id=>array('view','id'=>$model->cycle_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CycleMaster', 'url'=>array('index')),
	array('label'=>'Create CycleMaster', 'url'=>array('create')),
	array('label'=>'View CycleMaster', 'url'=>array('view', 'id'=>$model->cycle_id)),
	array('label'=>'Manage CycleMaster', 'url'=>array('admin')),
);
?>

<h1>Update CycleMaster <?php echo $model->cycle_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
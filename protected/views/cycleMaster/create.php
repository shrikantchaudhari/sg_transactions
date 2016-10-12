<?php
/* @var $this CycleMasterController */
/* @var $model CycleMaster */

$this->breadcrumbs=array(
	'Cycle Masters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CycleMaster', 'url'=>array('index')),
	array('label'=>'Manage CycleMaster', 'url'=>array('admin')),
);
?>

<h1>Create CycleMaster</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
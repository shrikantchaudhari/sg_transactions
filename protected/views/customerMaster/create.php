<?php
/* @var $this CustomerMasterController */
/* @var $model CustomerMaster */

$this->breadcrumbs=array(
	'Customer Masters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CustomerMaster', 'url'=>array('index')),
	array('label'=>'Manage CustomerMaster', 'url'=>array('admin')),
);
?>

<h1>Create CustomerMaster</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
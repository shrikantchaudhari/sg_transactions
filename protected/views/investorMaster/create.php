<?php
/* @var $this InvestorMasterController */
/* @var $model InvestorMaster */

$this->breadcrumbs=array(
	'Investor Masters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Investor', 'url'=>array('index')),
	array('label'=>'Manage Investor', 'url'=>array('admin')),
);
?>

<h1>Create Investor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
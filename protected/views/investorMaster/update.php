<?php
/* @var $this InvestorMasterController */
/* @var $model InvestorMaster */

$this->breadcrumbs=array(
	'Investor Masters'=>array('index'),
	$model->name=>array('view','id'=>$model->investor_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InvestorMaster', 'url'=>array('index')),
	array('label'=>'Create InvestorMaster', 'url'=>array('create')),
	array('label'=>'View InvestorMaster', 'url'=>array('view', 'id'=>$model->investor_id)),
	array('label'=>'Manage InvestorMaster', 'url'=>array('admin')),
);
?>

<h1>Update InvestorMaster <?php echo $model->investor_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
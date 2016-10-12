<?php
/* @var $this InvestorMasterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Investor Masters',
);

$this->menu=array(
	array('label'=>'Create InvestorMaster', 'url'=>array('create')),
	array('label'=>'Manage InvestorMaster', 'url'=>array('admin')),
);
?>

<h1>Investor Masters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

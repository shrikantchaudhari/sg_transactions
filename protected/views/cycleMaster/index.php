<?php
/* @var $this CycleMasterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cycle Masters',
);

$this->menu=array(
	array('label'=>'Create CycleMaster', 'url'=>array('create')),
	array('label'=>'Manage CycleMaster', 'url'=>array('admin')),
);
?>

<h1>Cycle Masters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

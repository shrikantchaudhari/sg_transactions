<?php
/* @var $this InvestorTransactionController */
/* @var $model InvestorTransaction */

$this->breadcrumbs=array(
	'Investor Transactions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InvestorTransaction', 'url'=>array('index')),
	array('label'=>'Create InvestorTransaction', 'url'=>array('create')),
	array('label'=>'View InvestorTransaction', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage InvestorTransaction', 'url'=>array('admin')),
);
?>

<h1>Update InvestorTransaction <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this InvestorMasterController */
/* @var $model InvestorMaster */

$this->breadcrumbs=array(
	'Investor Masters'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Investors', 'url'=>array('index')),
	array('label'=>'Create Investor', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#investor-master-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Investors</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'investor-master-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'investor_id',
		'name',
		'mobile_no',
		'email',
		// 'cycle_id',
		'purchase_date',
		array(
          'name' => 'cycle',
          'value' => 'CHtml::encode($data->cycle->nick_name)'
        ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

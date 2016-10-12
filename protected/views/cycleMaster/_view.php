<?php
/* @var $this CycleMasterController */
/* @var $data CycleMaster */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cycle_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cycle_id), array('view', 'id'=>$data->cycle_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('brand')); ?>:</b>
	<?php echo CHtml::encode($data->brand); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('model_name')); ?>:</b>
	<?php echo CHtml::encode($data->model_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nick_name')); ?>:</b>
	<?php echo CHtml::encode($data->nick_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cycle_price')); ?>:</b>
	<?php echo CHtml::encode($data->cycle_price); ?>
	<br />


</div>
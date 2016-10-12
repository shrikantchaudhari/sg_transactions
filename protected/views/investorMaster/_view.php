<?php
/* @var $this InvestorMasterController */
/* @var $data InvestorMaster */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('investor_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->investor_id), array('view', 'id'=>$data->investor_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile_no')); ?>:</b>
	<?php echo CHtml::encode($data->mobile_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cycle_id')); ?>:</b>
	<?php echo CHtml::encode($data->cycle_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purchase_date')); ?>:</b>
	<?php echo CHtml::encode($data->purchase_date); ?>
	<br />


</div>
<?php
/* @var $this BookingController */
/* @var $data Booking */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('booking_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->booking_id), array('view', 'id'=>$data->booking_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cycle_id')); ?>:</b>
	<?php echo CHtml::encode($data->cycle_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_id')); ?>:</b>
	<?php echo CHtml::encode($data->customer_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('booking_from')); ?>:</b>
	<?php echo CHtml::encode($data->booking_from); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('booking_to')); ?>:</b>
	<?php echo CHtml::encode($data->booking_to); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('booking_amount')); ?>:</b>
	<?php echo CHtml::encode($data->booking_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('delivery_charges')); ?>:</b>
	<?php echo CHtml::encode($data->delivery_charges); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expense')); ?>:</b>
	<?php echo CHtml::encode($data->expense); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('expense_description')); ?>:</b>
	<?php echo CHtml::encode($data->expense_description); ?>
	<br />
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('deposite')); ?>:</b>
	<?php echo CHtml::encode($data->deposite); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_of_helmates')); ?>:</b>
	<?php echo CHtml::encode($data->no_of_helmates); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_of_lock')); ?>:</b>
	<?php echo CHtml::encode($data->no_of_lock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_on')); ?>:</b>
	<?php echo CHtml::encode($data->created_on); ?>
	<br />

	*/ ?>

</div>
<?php
/* @var $this BookingController */
/* @var $model Booking */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'booking_id'); ?>
		<?php echo $form->textField($model,'booking_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cycle_id'); ?>
		<?php echo $form->textArea($model,'cycle_id',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customer_id'); ?>
		<?php echo $form->textField($model,'customer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'booking_from'); ?>
		<?php echo $form->textField($model,'booking_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'booking_to'); ?>
		<?php echo $form->textField($model,'booking_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'booking_amount'); ?>
		<?php echo $form->textField($model,'booking_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'delivery_charges'); ?>
		<?php echo $form->textField($model,'delivery_charges'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deposite'); ?>
		<?php echo $form->textField($model,'deposite'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_of_helmates'); ?>
		<?php echo $form->textField($model,'no_of_helmates'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_of_lock'); ?>
		<?php echo $form->textField($model,'no_of_lock'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'notes'); ?>
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_on'); ?>
		<?php echo $form->textField($model,'created_on'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
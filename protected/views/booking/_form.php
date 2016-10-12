<?php
/* @var $this BookingController */
/* @var $model Booking */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'booking-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); 


$nickNames = CycleMaster::model()->findAll();
$cyleList = CHtml::listData($nickNames, 'cycle_id', 'nick_name');

$customerNames = CustomerMaster::model()->findAll();
$customerList = CHtml::listData($customerNames, 'customer_id', 'name');

// <?php echo $form->dropDownList($model,'clients', 
//   CHtml::listData(client::model()->findAll(array('order'=>'id')), 'id', 'name'),
//      array('empty'=>'','multiple'=>true ,'style'=>'width:400px;','size'=>'10'));
// 

		
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cycle_id'); ?>
		<?php echo $form->dropDownList($model, 'cycle_id',$cyleList, array('multiple'=>true,'size'=>'5')); ?>
		<?php echo $form->error($model,'cycle_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'no_of_cycles'); ?>
		<?php echo $form->textField($model,'no_of_cycles'); ?>
		<?php echo $form->error($model,'no_of_cycles'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'customer_id'); ?>
	<?php echo $form->dropDownList($model, 'customer_id',$customerList, array('prompt'=>'Select Customer')); ?>
		<?php echo $form->error($model,'customer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'booking_from'); ?>
		
		 <?php  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                //'name'=>'date',
                'model'=>$model,
                'attribute'=>'booking_from',
                'language'=>Yii::app()->language=='es' ? 'es' : null,
                'options'=>array(
                    'changeMonth'=>'true', 
                    'changeYear'=>'true',   
                    'yearRange' => '-99:+2',        
                    'showAnim'=>'fold', // 'show' (the default), 'slideDown', 'fadeIn', 'fold'
                    'showOn'=>'focus', // 'focus', 'button', 'both'
                    'dateFormat'=>'yy-mm-dd',
                    'value'=>date('yy-mm-dd'),
                   
                ),
               
            ));?>
		<?php echo $form->error($model,'booking_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'booking_to'); ?>
		 <?php  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                //'name'=>'date',
                'model'=>$model,
                'attribute'=>'booking_to',
                'language'=>Yii::app()->language=='es' ? 'es' : null,
                'options'=>array(
                    'changeMonth'=>'true', 
                    'changeYear'=>'true',   
                    'yearRange' => '-99:+2',        
                    'showAnim'=>'fold', // 'show' (the default), 'slideDown', 'fadeIn', 'fold'
                    'showOn'=>'focus', // 'focus', 'button', 'both'
                    'dateFormat'=>'yy-mm-dd',
                    'value'=>date('yy-mm-dd'),
                   
                ),
               
            ));?>
		<?php echo $form->error($model,'booking_to'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'booking_amount'); ?>
		<?php echo $form->textField($model,'booking_amount'); ?>
		<?php echo $form->error($model,'booking_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'delivery_charges'); ?>
		<?php echo $form->textField($model,'delivery_charges'); ?>
		<?php echo $form->error($model,'delivery_charges'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deposite'); ?>
		<?php echo $form->textField($model,'deposite'); ?>
		<?php echo $form->error($model,'deposite'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_of_helmates'); ?>
		<?php echo $form->textField($model,'no_of_helmates'); ?>
		<?php echo $form->error($model,'no_of_helmates'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_of_lock'); ?>
		<?php echo $form->textField($model,'no_of_lock'); ?>
		<?php echo $form->error($model,'no_of_lock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notes'); ?>
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'notes'); ?>
	</div>


	<?php $model->created_on = date('Y-m-d G:i:s');?>
	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
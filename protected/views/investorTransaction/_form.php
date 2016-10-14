<?php
/* @var $this InvestorTransactionController */
/* @var $model InvestorTransaction */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'investor-transaction-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); 

$investorNames = InvestorMaster::model()->findAll();
$investorList = CHtml::listData($investorNames, 'investor_id', 'name');

$booking = Booking::model()->findAll();
$bookingList = CHtml::listData($booking, 'booking_id', 'booking_id');

$static = array(
    'Credit'     => Yii::t('fim','Credit'), 
    'Debit' => Yii::t('fim','Debit')
    
);



?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'investor_id'); ?>
		<?php echo $form->dropDownList($model, 'investor_id',$investorList, array('prompt'=>'Select Investor')); ?>
		<?php echo $form->error($model,'investor_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'booking_id'); ?>
		<?php echo $form->dropDownList($model, 'booking_id',$bookingList, array('prompt'=>'Select Booking id',"readonly"=>true)); ?>
		<?php echo $form->error($model,'booking_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transaction_amount'); ?>
		<?php echo $form->textField($model,'transaction_amount'); ?>
		<?php echo $form->error($model,'transaction_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transaction_type'); ?>
		<?php echo $form->dropDownList($model,'transaction_type',$static); ?>   
		<?php echo $form->error($model,'transaction_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'createdOn'); ?>
		
		 <?php  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                //'name'=>'date',
                'model'=>$model,
                'attribute'=>'createdOn',
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
		<?php echo $form->error($model,'createdOn'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
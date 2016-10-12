<?php
/* @var $this InvestorMasterController */
/* @var $model InvestorMaster */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'investor-master-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); 


$nickNames = CycleMaster::model()->findAll();
$cyleList = CHtml::listData($nickNames, 'cycle_id', 'nick_name');


?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile_no'); ?>
		<?php echo $form->textField($model,'mobile_no',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'mobile_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cycle_id'); ?>
		<?php echo $form->dropDownList($model, 'cycle_id',$cyleList, array('prompt'=>'Select Cycle')); ?>
		<?php echo $form->error($model,'cycle_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purchase_date'); ?>
	
		 <?php  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                //'name'=>'date',
                'model'=>$model,
                'attribute'=>'purchase_date',
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

	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
/* @var $this BookingController */
/* @var $model Booking */

$this->breadcrumbs=array(
	'Bookings'=>array('index'),
	$model->booking_id,
);

$this->menu=array(
	array('label'=>'List Booking', 'url'=>array('index')),
	array('label'=>'Create Booking', 'url'=>array('create')),
	array('label'=>'Update Booking', 'url'=>array('update', 'id'=>$model->booking_id)),
	array('label'=>'Delete Booking', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->booking_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Booking', 'url'=>array('admin')),
	array('label'=>'Add Investor Transaction', 'url'=>array('investorTransaction/create', 'booking_id'=>$model->booking_id)),
);
?>

<h1>View Booking #<?php echo $model->booking_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'booking_id',
		'cycle_id',
		'customer_id',
		'booking_from',
		'booking_to',
		'booking_amount',
		'delivery_charges',
		'deposite',
		'no_of_helmates',
		'no_of_lock',
		'notes',
		'created_on',
		'expense',
		'expense_description',
	),
)); ?>

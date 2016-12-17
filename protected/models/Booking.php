<?php

/**
 * This is the model class for table "tblBooking".
 *
 * The followings are the available columns in table 'tblBooking':
 * @property integer $booking_id
 * @property string $cycle_id
 * @property integer $customer_id
 * @property string $booking_from
 * @property string $booking_to
 * @property integer $booking_amount
 * @property integer $delivery_charges
 * @property integer $deposite
 * @property integer $no_of_helmates
 * @property integer $no_of_lock
 * @property string $notes
 * @property string $created_on
 *
 * The followings are the available model relations:
 * @property CustomerMaster $customer
 * @property InvestorTransaction[] $investorTransactions
 */
class Booking extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblBooking';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customer_id, booking_from, booking_to, booking_amount, delivery_charges, deposite, no_of_helmates, no_of_lock', 'required'),
			array('no_of_cycles,customer_id, booking_amount, delivery_charges, deposite, no_of_helmates, no_of_lock,expense', 'numerical', 'integerOnly'=>true),
			array('created_on', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('no_of_cycles,booking_id, cycle_id, customer_id, booking_from, booking_to, booking_amount, delivery_charges, deposite, no_of_helmates, no_of_lock, notes, created_on, expense, expense_description', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'customer' => array(self::BELONGS_TO, 'CustomerMaster', 'customer_id'),
			'investorTransactions' => array(self::HAS_MANY, 'InvestorTransaction', 'booking_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'no_of_cycles' => 'No of cycles',
			'booking_id' => 'Booking',
			'cycle_id' => 'Cycle',
			'customer_id' => 'Customer',
			'booking_from' => 'Booking From',
			'booking_to' => 'Booking To',
			'booking_amount' => 'Booking Amount',
			'delivery_charges' => 'Delivery Charges',
			'deposite' => 'Deposite',
			'no_of_helmates' => 'No Of Helmates',
			'no_of_lock' => 'No Of Lock',
			'notes' => 'Notes',
			'created_on' => 'Created On',
			'expense' => 'Expense', 
			'expense_description' => 'Expense Description',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria = new CDbCriteria;
		$sort     = new CSort;

		$criteria->compare('no_of_cycles', $this->no_of_cycles);
		$criteria->compare('booking_id',$this->booking_id);
		$criteria->compare('cycle_id',$this->cycle_id,true);
		$criteria->compare('customer_id',$this->customer_id);
		$criteria->compare('booking_from',$this->booking_from,true);
		$criteria->compare('booking_to',$this->booking_to,true);
		$criteria->compare('booking_amount',$this->booking_amount);
		$criteria->compare('delivery_charges',$this->delivery_charges);
		$criteria->compare('deposite',$this->deposite);
		$criteria->compare('no_of_helmates',$this->no_of_helmates);
		$criteria->compare('no_of_lock',$this->no_of_lock);
		$criteria->compare('notes',$this->notes,true);
		$criteria->compare('created_on',$this->created_on,true);
		$criteria->compare('expense',$this->expense);
		$criteria->compare('expense_description',$this->expense_description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort' => array(
		        'defaultOrder' => 'booking_from DESC',
		    ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Booking the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

<?php

/**
 * This is the model class for table "tblCustomerMaster".
 *
 * The followings are the available columns in table 'tblCustomerMaster':
 * @property integer $customer_id
 * @property string $name
 * @property string $mobile_no
 * @property string $email
 * @property string $address
 * @property integer $pincode
 *
 * The followings are the available model relations:
 * @property Booking[] $bookings
 */
class CustomerMaster extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblCustomerMaster';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('pincode', 'numerical', 'integerOnly'=>true),
			array('mobile_no', 'length', 'max'=>20),
			array('email', 'length', 'max'=>200),
			array('address', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('customer_id, name, mobile_no, email, address, pincode', 'safe', 'on'=>'search'),
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
			'bookings' => array(self::HAS_MANY, 'Booking', 'customer_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'customer_id' => 'Customer',
			'name' => 'Name',
			'mobile_no' => 'Mobile No',
			'email' => 'Email',
			'address' => 'Address',
			'pincode' => 'Pincode',
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

		$criteria=new CDbCriteria;

		$criteria->compare('customer_id',$this->customer_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('mobile_no',$this->mobile_no,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('pincode',$this->pincode);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CustomerMaster the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

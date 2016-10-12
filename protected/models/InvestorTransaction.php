<?php

/**
 * This is the model class for table "tblInvestorTransaction".
 *
 * The followings are the available columns in table 'tblInvestorTransaction':
 * @property integer $id
 * @property integer $investor_id
 * @property integer $booking_id
 * @property integer $transaction_amount
 * @property string $transaction_type
 * @property string $createdOn
 *
 * The followings are the available model relations:
 * @property InvestorMaster $investor
 * @property Booking $booking
 */
class InvestorTransaction extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblInvestorTransaction';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('investor_id, transaction_amount, transaction_type, createdOn', 'required'),
			array('investor_id, booking_id, transaction_amount', 'numerical', 'integerOnly'=>true),
			array('transaction_type', 'length', 'max'=>7),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, investor_id, booking_id, transaction_amount, transaction_type, createdOn', 'safe', 'on'=>'search'),
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
			'investor' => array(self::BELONGS_TO, 'InvestorMaster', 'investor_id'),
			'booking' => array(self::BELONGS_TO, 'Booking', 'booking_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'investor_id' => 'Investor',
			'booking_id' => 'Booking',
			'transaction_amount' => 'Transaction Amount',
			'transaction_type' => 'Transaction Type',
			'createdOn' => 'Created On',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('investor_id',$this->investor_id);
		$criteria->compare('booking_id',$this->booking_id);
		$criteria->compare('transaction_amount',$this->transaction_amount);
		$criteria->compare('transaction_type',$this->transaction_type,true);
		$criteria->compare('createdOn',$this->createdOn,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return InvestorTransaction the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

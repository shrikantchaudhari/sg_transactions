<?php

/**
 * This is the model class for table "tblInvestorMaster".
 *
 * The followings are the available columns in table 'tblInvestorMaster':
 * @property integer $investor_id
 * @property string $name
 * @property string $mobile_no
 * @property string $email
 * @property integer $cycle_id
 * @property string $purchase_date
 *
 * The followings are the available model relations:
 * @property CycleMaster $cycle
 * @property InvestorTransaction[] $investorTransactions
 */
class InvestorMaster extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblInvestorMaster';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, cycle_id', 'required'),
			array('cycle_id', 'numerical', 'integerOnly'=>true),
			array('mobile_no', 'length', 'max'=>20),
			array('email', 'length', 'max'=>200),
			array('purchase_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('investor_id, name, mobile_no, email, cycle_id, purchase_date', 'safe', 'on'=>'search'),
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
			'cycle' => array(self::BELONGS_TO, 'CycleMaster', 'cycle_id'),
			'investorTransactions' => array(self::HAS_MANY, 'InvestorTransaction', 'investor_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'investor_id' => 'Investor',
			'name' => 'Name',
			'mobile_no' => 'Mobile No',
			'email' => 'Email',
			'cycle_id' => 'Cycle',
			'purchase_date' => 'Purchase Date',
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

		$criteria->compare('investor_id',$this->investor_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('mobile_no',$this->mobile_no,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('cycle_id',$this->cycle_id);
		$criteria->compare('purchase_date',$this->purchase_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return InvestorMaster the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

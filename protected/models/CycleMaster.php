<?php

/**
 * This is the model class for table "tblCycleMaster".
 *
 * The followings are the available columns in table 'tblCycleMaster':
 * @property integer $cycle_id
 * @property string $brand
 * @property string $model_name
 * @property string $description
 * @property string $nick_name
 * @property integer $cycle_price
 *
 * The followings are the available model relations:
 * @property InvestorMaster[] $investorMasters
 */
class CycleMaster extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblCycleMaster';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('brand, model_name', 'required'),
			array('cycle_price', 'numerical', 'integerOnly'=>true),
			array('description, nick_name', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cycle_id, brand, model_name, description, nick_name, cycle_price', 'safe', 'on'=>'search'),
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
			'investorMasters' => array(self::HAS_MANY, 'InvestorMaster', 'cycle_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cycle_id' => 'Cycle',
			'brand' => 'Brand',
			'model_name' => 'Model Name',
			'description' => 'Description',
			'nick_name' => 'Nick Name',
			'cycle_price' => 'Cycle Price',
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

		$criteria->compare('cycle_id',$this->cycle_id);
		$criteria->compare('brand',$this->brand,true);
		$criteria->compare('model_name',$this->model_name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('nick_name',$this->nick_name,true);
		$criteria->compare('cycle_price',$this->cycle_price);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CycleMaster the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

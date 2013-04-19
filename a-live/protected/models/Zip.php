<?php

/**
 * This is the model class for table "Zip".
 *
 * The followings are the available columns in table 'Zip':
 * @property string $id
 * @property string $zipCode
 * @property string $mainCity
 * @property string $acceptableCity
 * @property string $county
 * @property string $state
 *
 * The followings are the available model relations:
 * @property Caregiver[] $caregivers
 * @property Client[] $clients
 * @property Clientcontactperson[] $clientcontactpeople
 * @property Employee[] $employees
 * @property Facility[] $facilities
 */
class Zip extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Zip the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Zip';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('zipCode, mainCity, acceptableCity', 'required'),
			array('zipCode', 'length', 'max'=>10),
			array('mainCity, acceptableCity, county, state', 'length', 'max'=>40),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, zipCode, mainCity, acceptableCity, county, state', 'safe', 'on'=>'search'),
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
			'caregivers' => array(self::HAS_MANY, 'Caregiver', 'zipId'),
			'clients' => array(self::HAS_MANY, 'Client', 'zipId'),
			'clientcontactpeople' => array(self::HAS_MANY, 'Clientcontactperson', 'zipId'),
			'employees' => array(self::HAS_MANY, 'Employee', 'zip'),
			'facilities' => array(self::HAS_MANY, 'Facility', 'zip'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'zipCode' => 'Zip Code',
			'mainCity' => 'Main City',
			'acceptableCity' => 'Acceptable City',
			'county' => 'County',
			'state' => 'State',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('zipCode',$this->zipCode,true);
		$criteria->compare('mainCity',$this->mainCity,true);
		$criteria->compare('acceptableCity',$this->acceptableCity,true);
		$criteria->compare('county',$this->county,true);
		$criteria->compare('state',$this->state,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
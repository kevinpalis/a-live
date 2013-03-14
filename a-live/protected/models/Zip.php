<?php

/**
 * This is the model class for table "zip".
 *
 * The followings are the available columns in table 'zip':
 * @property string $idZipCode
 * @property string $cityName
 * @property string $countyName
 * @property string $country
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
		return 'zip';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idZipCode, cityName', 'required'),
			array('idZipCode', 'length', 'max'=>10),
			array('cityName, countyName, country', 'length', 'max'=>40),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idZipCode, cityName, countyName, country', 'safe', 'on'=>'search'),
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
			'caregivers' => array(self::HAS_MANY, 'Caregiver', 'zip'),
			'clients' => array(self::HAS_MANY, 'Client', 'zip'),
			'clientcontactpeople' => array(self::HAS_MANY, 'Clientcontactperson', 'zip'),
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
			'idZipCode' => 'Id Zip Code',
			'cityName' => 'City Name',
			'countyName' => 'County Name',
			'country' => 'Country',
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

		$criteria->compare('idZipCode',$this->idZipCode,true);
		$criteria->compare('cityName',$this->cityName,true);
		$criteria->compare('countyName',$this->countyName,true);
		$criteria->compare('country',$this->country,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
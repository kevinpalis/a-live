<?php

/**
 * This is the model class for table "facility".
 *
 * The followings are the available columns in table 'facility':
 * @property string $idFacility
 * @property string $facilityName
 * @property string $addres
 * @property string $zip
 * @property string $facilityStatus
 *
 * The followings are the available model relations:
 * @property Client[] $clients
 * @property Zip $zip0
 * @property Facilitycontact[] $facilitycontacts
 */
class Facility extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Facility the static model class
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
		return 'facility';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('facilityName, addres', 'length', 'max'=>100),
			array('zip', 'length', 'max'=>10),
			array('facilityStatus', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idFacility, facilityName, addres, zip, facilityStatus', 'safe', 'on'=>'search'),
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
			'clients' => array(self::HAS_MANY, 'Client', 'idFacility'),
			'zip0' => array(self::BELONGS_TO, 'Zip', 'zip'),
			'facilitycontacts' => array(self::HAS_MANY, 'Facilitycontact', 'Facility_idFacility'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idFacility' => 'Id Facility',
			'facilityName' => 'Facility Name',
			'addres' => 'Addres',
			'zip' => 'Zip',
			'facilityStatus' => 'Facility Status',
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

		$criteria->compare('idFacility',$this->idFacility,true);
		$criteria->compare('facilityName',$this->facilityName,true);
		$criteria->compare('addres',$this->addres,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('facilityStatus',$this->facilityStatus,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
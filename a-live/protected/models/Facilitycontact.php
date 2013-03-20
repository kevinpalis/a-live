<?php

/**
 * This is the model class for table "facilitycontact".
 *
 * The followings are the available columns in table 'facilitycontact':
 * @property string $idFacilityContact
 * @property string $Facility_idFacility
 * @property string $fname
 * @property string $lname
 * @property string $primaryContact
 * @property string $secondaryContactNum
 * @property string $facilityContactType
 *
 * The followings are the available model relations:
 * @property Client[] $clients
 * @property Facility $facilityIdFacility
 */
class Facilitycontact extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Facilitycontact the static model class
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
		return 'facilitycontact';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Facility_idFacility', 'required'),
			array('Facility_idFacility', 'length', 'max'=>10),
			array('fname, lname, facilityContactType', 'length', 'max'=>50),
			array('primaryContact, secondaryContactNum', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idFacilityContact, Facility_idFacility, fname, lname, primaryContact, secondaryContactNum, facilityContactType', 'safe', 'on'=>'search'),
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
			'clients' => array(self::HAS_MANY, 'Client', 'idFacilityContact'),
			'facilityIdFacility' => array(self::BELONGS_TO, 'Facility', 'Facility_idFacility'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idFacilityContact' => 'Id Facility Contact',
			'Facility_idFacility' => 'Facility Id Facility',
			'fname' => 'Fname',
			'lname' => 'Lname',
			'primaryContact' => 'Primary Contact',
			'secondaryContactNum' => 'Secondary Contact Num',
			'facilityContactType' => 'Facility Contact Type',
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

		$criteria->compare('idFacilityContact',$this->idFacilityContact,true);
		$criteria->compare('Facility_idFacility',$this->Facility_idFacility,true);
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('primaryContact',$this->primaryContact,true);
		$criteria->compare('secondaryContactNum',$this->secondaryContactNum,true);
		$criteria->compare('facilityContactType',$this->facilityContactType,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
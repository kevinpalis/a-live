<?php

/**
 * This is the model class for table "client".
 *
 * The followings are the available columns in table 'client':
 * @property string $idClient
 * @property string $fname
 * @property string $lname
 * @property string $address
 * @property string $zip
 * @property integer $age
 * @property string $primaryNum
 * @property string $secondaryNum
 * @property string $email
 * @property string $createdBy
 * @property string $dateStart
 * @property string $dateEnd
 * @property integer $status
 * @property string $holidayWork
 * @property string $sex
 * @property string $height
 * @property string $weight
 * @property string $idEmployee
 * @property string $idFacility
 * @property string $idFacilityContact
 * @property string $tagforUpdate
 * @property double $depositAmount
 * @property string $dateEntered
 * @property double $creditLimit
 *
 * The followings are the available model relations:
 * @property Absencetracker[] $absencetrackers
 * @property Caregiverassignment[] $caregiverassignments
 * @property Cilentpayment[] $cilentpayments
 * @property Zip $zip0
 * @property Facility $idFacility0
 * @property Facilitycontact $idFacilityContact0
 * @property Employee $idEmployee0
 * @property Clientcontactperson[] $clientcontactpeople
 * @property Clientintake[] $clientintakes
 * @property Otherexpenses[] $otherexpenses
 * @property Payrollcg[] $payrollcgs
 */
class Client extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Client the static model class
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
		return 'client';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fname, lname, address, zip, primaryNum, holidayWork', 'required'),
			array('age, status', 'numerical', 'integerOnly'=>true),
			array('depositAmount, creditLimit', 'numerical'),
			array('fname, lname', 'length', 'max'=>50),
			array('address', 'length', 'max'=>100),
			array('zip, primaryNum, secondaryNum, height, weight, idEmployee, idFacility, idFacilityContact', 'length', 'max'=>10),
			array('email', 'length', 'max'=>20),
			array('createdBy', 'length', 'max'=>70),
			array('holidayWork, sex, tagforUpdate', 'length', 'max'=>1),
			array('dateStart, dateEnd, dateEntered', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idClient, fname, lname, address, zip, age, primaryNum, secondaryNum, email, createdBy, dateStart, dateEnd, status, holidayWork, sex, height, weight, idEmployee, idFacility, idFacilityContact, tagforUpdate, depositAmount, dateEntered, creditLimit', 'safe', 'on'=>'search'),
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
			'absencetrackers' => array(self::HAS_MANY, 'Absencetracker', 'Client_idClient'),
			'caregiverassignments' => array(self::HAS_MANY, 'Caregiverassignment', 'Client_idClient'),
			'cilentpayments' => array(self::HAS_MANY, 'Cilentpayment', 'Client_idClient'),
			'zip0' => array(self::BELONGS_TO, 'Zip', 'zip'),
			'idFacility0' => array(self::BELONGS_TO, 'Facility', 'idFacility'),
			'idFacilityContact0' => array(self::BELONGS_TO, 'Facilitycontact', 'idFacilityContact'),
			'idEmployee0' => array(self::BELONGS_TO, 'Employee', 'idEmployee'),
			'clientcontactpeople' => array(self::HAS_MANY, 'Clientcontactperson', 'Client_idClient'),
			'clientintakes' => array(self::HAS_MANY, 'Clientintake', 'Client_idClient'),
			'otherexpenses' => array(self::HAS_MANY, 'Otherexpenses', 'Client_idClient'),
			'payrollcgs' => array(self::HAS_MANY, 'Payrollcg', 'Client_idClient'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idClient' => 'Id Client',
			'fname' => 'Fname',
			'lname' => 'Lname',
			'address' => 'Address',
			'zip' => 'Zip',
			'age' => 'Age',
			'primaryNum' => 'Primary Num',
			'secondaryNum' => 'Secondary Num',
			'email' => 'Email',
			'createdBy' => 'Created By',
			'dateStart' => 'Date Start',
			'dateEnd' => 'Date End',
			'status' => 'Status',
			'holidayWork' => 'Holiday Work',
			'sex' => 'Sex',
			'height' => 'Height',
			'weight' => 'Weight',
			'idEmployee' => 'Id Employee',
			'idFacility' => 'Id Facility',
			'idFacilityContact' => 'Id Facility Contact',
			'tagforUpdate' => 'Tagfor Update',
			'depositAmount' => 'Deposit Amount',
			'dateEntered' => 'Date Entered',
			'creditLimit' => 'Credit Limit',
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

		$criteria->compare('idClient',$this->idClient,true);
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('age',$this->age);
		$criteria->compare('primaryNum',$this->primaryNum,true);
		$criteria->compare('secondaryNum',$this->secondaryNum,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('createdBy',$this->createdBy,true);
		$criteria->compare('dateStart',$this->dateStart,true);
		$criteria->compare('dateEnd',$this->dateEnd,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('holidayWork',$this->holidayWork,true);
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('height',$this->height,true);
		$criteria->compare('weight',$this->weight,true);
		$criteria->compare('idEmployee',$this->idEmployee,true);
		$criteria->compare('idFacility',$this->idFacility,true);
		$criteria->compare('idFacilityContact',$this->idFacilityContact,true);
		$criteria->compare('tagforUpdate',$this->tagforUpdate,true);
		$criteria->compare('depositAmount',$this->depositAmount);
		$criteria->compare('dateEntered',$this->dateEntered,true);
		$criteria->compare('creditLimit',$this->creditLimit);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
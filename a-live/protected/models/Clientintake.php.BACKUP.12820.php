<?php

/**
 * This is the model class for table "clientintake".
 *
 * The followings are the available columns in table 'clientintake':
 * @property string $id
 * @property string $clientId
 * @property string $cgSex
 * @property string $liveIn
 * @property string $serviceHours
 * @property string $createdBy
 * @property string $serviceDays
 * @property string $cgAgeFrom
 * @property string $cgAgeTo
 * @property string $cgWeightFrom
 * @property string $cgWeightTo
 * @property string $cgHeightFrom
 * @property string $cgHeightTo
 * @property string $cgDriving
 * @property string $clientsCar
 * @property string $cgEnglishLevel
 * @property string $pcPets
 * @property string $pcSmoking
 * @property string $pcLivingCondition
 * @property string $pcWeightTransfer
 * @property string $pcConditionList
 * @property string $equipmentList
 * @property string $notes
 *
 * The followings are the available model relations:
 * @property Client $client
 */
class Clientintake extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Clientintake the static model class
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
		return 'clientintake';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('clientId, serviceDays', 'required'),
			array('clientId', 'length', 'max'=>10),
			array('serviceDays,pcConditionList,equipmentList','type','type'=>'array'),
			array('cgSex, liveIn, cgDriving, clientsCar, pcPets, pcSmoking', 'length', 'max'=>1),
			array('serviceHours', 'length', 'max'=>6),
			array('createdBy', 'length', 'max'=>20),
<<<<<<< HEAD
			array('pcWeightTransfer', 'length', 'max'=>50),
=======
			array('serviceDays', 'length', 'max'=>30),
			array('cgAgeFrom, cgAgeTo, cgWeightFrom, cgWeightTo, cgHeightFrom, cgHeightTo, cgEnglishLevel', 'length', 'max'=>5),
			array('pcLivingCondition, pcWeightTransfer, pcConditionList, equipmentList', 'length', 'max'=>50),
>>>>>>> origin/model-controllers
			array('notes', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, clientId, cgSex, liveIn, serviceHours, createdBy, serviceDays, cgAgeFrom, cgAgeTo, cgWeightFrom, cgWeightTo, cgHeightFrom, cgHeightTo, cgDriving, clientsCar, cgEnglishLevel, pcPets, pcSmoking, pcLivingCondition, pcWeightTransfer, pcConditionList, equipmentList, notes', 'safe', 'on'=>'search'),
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
			'client' => array(self::BELONGS_TO, 'Client', 'clientId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'clientId' => 'Client',
			'cgSex' => 'Cg Sex',
			'liveIn' => 'Live In',
			'serviceHours' => 'Service Hours',
			'createdBy' => 'Created By',
			'serviceDays' => 'Service Days',
			'cgAgeFrom' => 'Cg Age From',
			'cgAgeTo' => 'Cg Age To',
			'cgWeightFrom' => 'Cg Weight From',
			'cgWeightTo' => 'Cg Weight To',
			'cgHeightFrom' => 'Cg Height From',
			'cgHeightTo' => 'Cg Height To',
			'cgDriving' => 'Cg Driving',
			'clientsCar' => 'Clients Car',
			'cgEnglishLevel' => 'Cg English Level',
			'pcPets' => 'Pc Pets',
			'pcSmoking' => 'Pc Smoking',
			'pcLivingCondition' => 'Pc Living Condition',
			'pcWeightTransfer' => 'Pc Weight Transfer',
			'pcConditionList' => 'Pc Condition List',
			'equipmentList' => 'Equipment List',
			'notes' => 'Notes',
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
		$criteria->compare('clientId',$this->clientId,true);
		$criteria->compare('cgSex',$this->cgSex,true);
		$criteria->compare('liveIn',$this->liveIn,true);
		$criteria->compare('serviceHours',$this->serviceHours,true);
		$criteria->compare('createdBy',$this->createdBy,true);
		$criteria->compare('serviceDays',$this->serviceDays,true);
		$criteria->compare('cgAgeFrom',$this->cgAgeFrom,true);
		$criteria->compare('cgAgeTo',$this->cgAgeTo,true);
		$criteria->compare('cgWeightFrom',$this->cgWeightFrom,true);
		$criteria->compare('cgWeightTo',$this->cgWeightTo,true);
		$criteria->compare('cgHeightFrom',$this->cgHeightFrom,true);
		$criteria->compare('cgHeightTo',$this->cgHeightTo,true);
		$criteria->compare('cgDriving',$this->cgDriving,true);
		$criteria->compare('clientsCar',$this->clientsCar,true);
		$criteria->compare('cgEnglishLevel',$this->cgEnglishLevel,true);
		$criteria->compare('pcPets',$this->pcPets,true);
		$criteria->compare('pcSmoking',$this->pcSmoking,true);
		$criteria->compare('pcLivingCondition',$this->pcLivingCondition,true);
		$criteria->compare('pcWeightTransfer',$this->pcWeightTransfer,true);
		$criteria->compare('pcConditionList',$this->pcConditionList,true);
		$criteria->compare('equipmentList',$this->equipmentList,true);
		$criteria->compare('notes',$this->notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	protected function beforeSave(){

		if (!empty($this->serviceDays)) {$this->serviceDays=CJSON::encode($this->serviceDays);}
		if (!empty($this->pcConditionList)) {$this->pcConditionList=CJSON::encode($this->pcConditionList);}
		if (!empty($this->equipmentList)) {$this->equipmentList=CJSON::encode($this->equipmentList);}

		return parent::beforeValidate();
	}

	protected function afterFind(){

		parent::afterFind();

        $this->serviceDays = CJSON::decode($this->serviceDays);

        $this->pcConditionList = CJSON::decode($this->pcConditionList);

        $this->equipmentList = CJSON::decode($this->equipmentList);    

	}

	public function getDaysPrint(){

		$stringDays = '';
		foreach($this->serviceDays as $loopDay => $day){
			switch ($loopDay) {
				case '0':
					if($day=='0'){$stringDays.="Mon ";}
					break;
				case '1':
					if($day=='0'){$stringDays.="Tue ";}
					break;
				case '2':
					if($day=='0'){$stringDays.="Wed ";}
					break;
				case '3':
					if($day=='0'){$stringDays.="Thu ";}
					break;
				case '4':
					if($day=='0'){$stringDays .= "Fri ";}
					break;
				case '5':
					if($day=='0'){$stringDays.="Sat ";}
					break;
				case '6':
					if($day=='0'){$stringDays.="Sun ";}
					break;
				
				default:
					# code...
					break;
			}
			
		}
		return $stringDays;
	}

	public function getPrintLivingCondition(){

		$stringLivingCondition='';
		switch ($this->pcLivingCondition) {
		 	case '0':
		 		return $stringLivingCondition = "Alone";
		 		break;
			case '1':
		 		return $stringLivingCondition = "With Spouse";
		 		break;	
		 	case '2':
		 		return $stringLivingCondition = "Relatives";
		 		break;
			case '3':
		 		return $stringLivingCondition = "Non-Relatives";
		 		break;
		 	
		 	default:
		 		return $stringLivingCondition = " - ";
		 		break;
		 } 
	}

}
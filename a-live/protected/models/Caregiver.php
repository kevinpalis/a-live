<?php

/**
 * This is the model class for table "caregiver".
 *
 * The followings are the available columns in table 'caregiver':
 * @property string $id
 * @property string $fname
 * @property string $lname
 * @property string $photo
 * @property string $address
 * @property string $zipId
 * @property string $sex
 * @property string $birthDate
 * @property string $driving
 * @property string $pcExpList
 * @property string $equipmentExpList
 * @property string $applicationDate
 * @property string $signedDocs
 * @property string $englishLevel
 * @property string $languagesSpoken
 * @property string $rating
 * @property double $height
 * @property double $weight
 * @property string $livingCondition
 * @property string $primaryContactNum
 * @property string $secondaryContactNum
 * @property string $email
 * @property string $paymentType
 * @property string $withCar
 * @property string $preferredDays
 * @property string $preferredTimeStart
 * @property string $preferredTimeEnd
 * @property string $totalMonthsExperience
 * @property string $educationalAttainment
 * @property string $driversLicense
 * @property string $driversLicenseType
 * @property string $driversLicensePlaceofIssue
 * @property string $driversLicenseExpirationDate
 * @property string $accidentsPastYears
 * @property string $accidentDetails
 * @property string $movingViolations
 * @property string $movingViolationsCount
 * @property string $fingerPrint
 * @property string $fingerPrintResults
 * @property string $tbTested
 * @property string $tbTestResults
 * @property string $convictedCrime
 * @property string $convictedCrimeDetails
 * @property string $characterTraits
 * @property string $references
 * @property string $notes
 * @property string $certifciations
 * @property string $followUpCall
 *
 * The followings are the available model relations:
 * @property Absencetracker[] $absencetrackers
 * @property Zip $zip
 * @property Caregiverassignment[] $caregiverassignments
 * @property Cilentpayment[] $cilentpayments
 * @property Otherexpenses[] $otherexpenses
 * @property Payrollcg[] $payrollcgs
 */
class Caregiver extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Caregiver the static model class
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
		return 'caregiver';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sex, driversLicense, references, notes, certifciations, followUpCall', 'required'),
			array('height, weight', 'numerical'),
			array('fname, lname, zipId, englishLevel, languagesSpoken, rating, livingCondition, paymentType, totalMonthsExperience, movingViolationsCount', 'length', 'max'=>10),
			array('address, notes', 'length', 'max'=>50),
			array('sex, driving, withCar, accidentsPastYears, movingViolations, fingerPrint, tbTested, convictedCrime', 'length', 'max'=>1),
			array('pcExpList, equipmentExpList, primaryContactNum, secondaryContactNum, educationalAttainment, driversLicenseType', 'length', 'max'=>20),
			array('signedDocs', 'length', 'max'=>100),
			array('email, preferredDays, driversLicense', 'length', 'max'=>30),
			array('driversLicensePlaceofIssue, accidentDetails, fingerPrintResults, tbTestResults, convictedCrimeDetails, characterTraits, references, certifciations', 'length', 'max'=>40),
			array('photo, birthDate, applicationDate, preferredTimeStart, preferredTimeEnd, driversLicenseExpirationDate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, fname, lname, photo, address, zipId, sex, birthDate, driving, pcExpList, equipmentExpList, applicationDate, signedDocs, englishLevel, languagesSpoken, rating, height, weight, livingCondition, primaryContactNum, secondaryContactNum, email, paymentType, withCar, preferredDays, preferredTimeStart, preferredTimeEnd, totalMonthsExperience, educationalAttainment, driversLicense, driversLicenseType, driversLicensePlaceofIssue, driversLicenseExpirationDate, accidentsPastYears, accidentDetails, movingViolations, movingViolationsCount, fingerPrint, fingerPrintResults, tbTested, tbTestResults, convictedCrime, convictedCrimeDetails, characterTraits, references, notes, certifciations, followUpCall', 'safe', 'on'=>'search'),
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
			'absencetrackers' => array(self::HAS_MANY, 'Absencetracker', 'caregiverId'),
			'zip' => array(self::BELONGS_TO, 'Zip', 'zipId'),
			'caregiverassignments' => array(self::HAS_MANY, 'Caregiverassignment', 'caregiverId'),
			'cilentpayments' => array(self::HAS_MANY, 'Cilentpayment', 'caregiverId'),
			'otherexpenses' => array(self::HAS_MANY, 'Otherexpenses', 'caregiverId'),
			'payrollcgs' => array(self::HAS_MANY, 'Payrollcg', 'caregiverId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fname' => 'Fname',
			'lname' => 'Lname',
			'photo' => 'Photo',
			'address' => 'Address',
			'zipId' => 'Zip',
			'sex' => 'Sex',
			'birthDate' => 'Birth Date',
			'driving' => 'Driving',
			'pcExpList' => 'Pc Exp List',
			'equipmentExpList' => 'Equipment Exp List',
			'applicationDate' => 'Application Date',
			'signedDocs' => 'Signed Docs',
			'englishLevel' => 'English Level',
			'languagesSpoken' => 'Languages Spoken',
			'rating' => 'Rating',
			'height' => 'Height',
			'weight' => 'Weight',
			'livingCondition' => 'Living Condition',
			'primaryContactNum' => 'Primary Contact Num',
			'secondaryContactNum' => 'Secondary Contact Num',
			'email' => 'Email',
			'paymentType' => 'Payment Type',
			'withCar' => 'With Car',
			'preferredDays' => 'Preferred Days',
			'preferredTimeStart' => 'Preferred Time Start',
			'preferredTimeEnd' => 'Preferred Time End',
			'totalMonthsExperience' => 'Total Months Experience',
			'educationalAttainment' => 'Educational Attainment',
			'driversLicense' => 'Drivers License',
			'driversLicenseType' => 'Drivers License Type',
			'driversLicensePlaceofIssue' => 'Drivers License Placeof Issue',
			'driversLicenseExpirationDate' => 'Drivers License Expiration Date',
			'accidentsPastYears' => 'Accidents Past Years',
			'accidentDetails' => 'Accident Details',
			'movingViolations' => 'Moving Violations',
			'movingViolationsCount' => 'Moving Violations Count',
			'fingerPrint' => 'Finger Print',
			'fingerPrintResults' => 'Finger Print Results',
			'tbTested' => 'Tb Tested',
			'tbTestResults' => 'Tb Test Results',
			'convictedCrime' => 'Convicted Crime',
			'convictedCrimeDetails' => 'Convicted Crime Details',
			'characterTraits' => 'Character Traits',
			'references' => 'References',
			'notes' => 'Notes',
			'certifciations' => 'Certifciations',
			'followUpCall' => 'Follow Up Call',
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
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('zipId',$this->zipId,true);
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('birthDate',$this->birthDate,true);
		$criteria->compare('driving',$this->driving,true);
		//$criteria->compare('pcExpList',explode(",", $this->pcExpList),true);
		$criteria->compare('pcExpList', $this->pcExpList,true);
		$criteria->compare('equipmentExpList',$this->equipmentExpList,true);
		$criteria->compare('applicationDate',$this->applicationDate,true);
		$criteria->compare('signedDocs',$this->signedDocs,true);
		$criteria->compare('englishLevel',$this->englishLevel,true);
		$criteria->compare('languagesSpoken',$this->languagesSpoken,true);
		$criteria->compare('rating',$this->rating,true);
		$criteria->compare('height',$this->height);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('livingCondition',$this->livingCondition,true);
		$criteria->compare('primaryContactNum',$this->primaryContactNum,true);
		$criteria->compare('secondaryContactNum',$this->secondaryContactNum,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('paymentType',$this->paymentType,true);
		$criteria->compare('withCar',$this->withCar,true);
		//$criteria->compare('preferredDays',explode(",", $this->preferredDays),true, 'AND', true);
		$criteria->compare('preferredDays', $this->preferredDays, true);
		$criteria->compare('preferredTimeStart',$this->preferredTimeStart,true);
		$criteria->compare('preferredTimeEnd',$this->preferredTimeEnd,true);
		$criteria->compare('totalMonthsExperience',$this->totalMonthsExperience,true);
		$criteria->compare('educationalAttainment',$this->educationalAttainment,true);
		$criteria->compare('driversLicense',$this->driversLicense,true);
		$criteria->compare('driversLicenseType',$this->driversLicenseType,true);
		$criteria->compare('driversLicensePlaceofIssue',$this->driversLicensePlaceofIssue,true);
		$criteria->compare('driversLicenseExpirationDate',$this->driversLicenseExpirationDate,true);
		$criteria->compare('accidentsPastYears',$this->accidentsPastYears,true);
		$criteria->compare('accidentDetails',$this->accidentDetails,true);
		$criteria->compare('movingViolations',$this->movingViolations,true);
		$criteria->compare('movingViolationsCount',$this->movingViolationsCount,true);
		$criteria->compare('fingerPrint',$this->fingerPrint,true);
		$criteria->compare('fingerPrintResults',$this->fingerPrintResults,true);
		$criteria->compare('tbTested',$this->tbTested,true);
		$criteria->compare('tbTestResults',$this->tbTestResults,true);
		$criteria->compare('convictedCrime',$this->convictedCrime,true);
		$criteria->compare('convictedCrimeDetails',$this->convictedCrimeDetails,true);
		$criteria->compare('characterTraits',$this->characterTraits,true);
		$criteria->compare('references',$this->references,true);
		$criteria->compare('notes',$this->notes,true);
		$criteria->compare('certifciations',$this->certifciations,true);
		$criteria->compare('followUpCall',$this->followUpCall,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
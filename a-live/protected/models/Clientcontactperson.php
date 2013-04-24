<?php

/**
 * This is the model class for table "clientcontactperson".
 *
 * The followings are the available columns in table 'clientcontactperson':
 * @property string $id
 * @property string $clientId
 * @property string $fname
 * @property string $lname
 * @property string $address
 * @property string $createdBy
 * @property string $zipId
 * @property string $primaryNum
 * @property string $secondaryNum
 * @property string $email
 *
 * The followings are the available model relations:
 * @property Client $client
 * @property Zip $zip
 */
class Clientcontactperson extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Clientcontactperson the static model class
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
		return 'clientcontactperson';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('clientId, fname, lname, address, zipId, primaryNum', 'required'),
			array('clientId, zipId', 'length', 'max'=>10),
			array('fname, lname', 'length', 'max'=>50),
			array('address', 'length', 'max'=>100),
			array('createdBy', 'length', 'max'=>70),
			array('primaryNum, secondaryNum, email', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, clientId, fname, lname, address, createdBy, zipId, primaryNum, secondaryNum, email', 'safe', 'on'=>'search'),
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
			'zip' => array(self::BELONGS_TO, 'Zip', 'zipId'),
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
			'fname' => 'Fname',
			'lname' => 'Lname',
			'address' => 'Address',
			'createdBy' => 'Created By',
			'zipId' => 'Zip',
			'primaryNum' => 'Primary Num',
			'secondaryNum' => 'Secondary Num',
			'email' => 'Email',
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
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('createdBy',$this->createdBy,true);
		$criteria->compare('zipId',$this->zipId,true);
		$criteria->compare('primaryNum',$this->primaryNum,true);
		$criteria->compare('secondaryNum',$this->secondaryNum,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
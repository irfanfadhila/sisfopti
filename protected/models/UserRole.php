<?php

/**
 * This is the model class for table "sisfopti.user_role".
 *
 * The followings are the available columns in table 'sisfopti.user_role':
 * @property integer $id_user_role
 * @property string $username
 * @property integer $role_no
 * @property string $password
 *
 * The followings are the available model relations:
 * @property Role $roleNo
 * @property ServiceRequest[] $serviceRequests
 * @property ServiceRequest[] $serviceRequests1
 * @property ServiceRequest[] $serviceRequests2
 */
class UserRole extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sisfopti.user_role';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_user_role, username, role_no, password', 'required'),
			array('id_user_role, role_no', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>20),
			array('password', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_user_role, username, role_no, password', 'safe', 'on'=>'search'),
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
			'roleNo' => array(self::BELONGS_TO, 'Role', 'role_no'),
			'serviceRequests' => array(self::HAS_MANY, 'ServiceRequest', 'id_reviewer1'),
			'serviceRequests1' => array(self::HAS_MANY, 'ServiceRequest', 'id_reviewer2'),
			'serviceRequests2' => array(self::HAS_MANY, 'ServiceRequest', 'id_user_role'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_user_role' => 'Id User Role',
			'username' => 'Username',
			'role_no' => 'Role No',
			'password' => 'Password',
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

		$criteria->compare('id_user_role',$this->id_user_role);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('role_no',$this->role_no);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserRole the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

<?php

/**
 * This is the model class for table "sisfopti.pesan".
 *
 * The followings are the available columns in table 'sisfopti.pesan':
 * @property integer $id_pesan
 * @property string $judul
 * @property string $isi
 * @property integer $id_service_request
 * @property integer $id_user_role
 * @property string $created_on
 *
 * The followings are the available model relations:
 * @property ServiceRequest $idServiceRequest
 */
class Pesan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sisfopti.pesan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pesan, judul, isi, id_service_request', 'required'),
			array('id_pesan, id_service_request, id_user_role', 'numerical', 'integerOnly'=>true),
			array('judul', 'length', 'max'=>100),
			array('created_on', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pesan, judul, isi, id_service_request, id_user_role, created_on', 'safe', 'on'=>'search'),
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
			'idServiceRequest' => array(self::BELONGS_TO, 'ServiceRequest', 'id_service_request'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pesan' => 'Id Pesan',
			'judul' => 'Judul',
			'isi' => 'Isi',
			'id_service_request' => 'Id Service Request',
			'id_user_role' => 'Id User Role',
			'created_on' => 'Created On',
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

		$criteria->compare('id_pesan',$this->id_pesan);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('isi',$this->isi,true);
		$criteria->compare('id_service_request',$this->id_service_request);
		$criteria->compare('id_user_role',$this->id_user_role);
		$criteria->compare('created_on',$this->created_on,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pesan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

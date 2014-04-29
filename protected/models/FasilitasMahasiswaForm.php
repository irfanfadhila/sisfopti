<?php

/**
 * This is the model class for table "SisfoPTI.fasilitas_mahasiswa".
 *
 * The followings are the available columns in table 'SisfoPTI.fasilitas_mahasiswa':
 * @property integer $id_service_request
 * @property string $keperluan_tambahan
 * @property string $pembimbing
 *
 * The followings are the available model relations:
 * @property ServiceRequest $idServiceRequest
 */
class FasilitasMahasiswaForm extends CActiveRecord 
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'SisfoPTI.fasilitas_mahasiswa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_service_request, pembimbing', 'required'),
			array('id_service_request', 'numerical', 'integerOnly'=>true),
			array('pembimbing', 'length', 'max'=>30),
			array('keperluan_tambahan', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_service_request, keperluan_tambahan, pembimbing', 'safe', 'on'=>'search'),
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
			'id_service_request' => 'Id Service Request',
			'keperluan_tambahan' => 'Keperluan Tambahan',
			'pembimbing' => 'Pembimbing',
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

		$criteria->compare('id_service_request',$this->id_service_request);
		$criteria->compare('keperluan_tambahan',$this->keperluan_tambahan,true);
		$criteria->compare('pembimbing',$this->pembimbing,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FasilitasMahasiswaForm the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

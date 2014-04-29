<?php

/**
 * This is the model class for table "SisfoPTI.peminjaman_ruangan".
 *
 * The followings are the available columns in table 'SisfoPTI.peminjaman_ruangan':
 * @property integer $id_service_request
 * @property integer $jumlah_peserta
 * @property string $nama_ruang
 * @property string $waktu_pinjam
 * @property string $keperluan_tambahan
 *
 * The followings are the available model relations:
 * @property ServiceRequest $idServiceRequest
 */
class PeminjamanRuanganForm extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'SisfoPTI.peminjaman_ruangan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_service_request, jumlah_peserta, nama_ruang, waktu_pinjam', 'required'),
			array('id_service_request, jumlah_peserta', 'numerical', 'integerOnly'=>true),
			array('nama_ruang', 'length', 'max'=>30),
			array('waktu_pinjam', 'length', 'max'=>20),
			array('keperluan_tambahan', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_service_request, jumlah_peserta, nama_ruang, waktu_pinjam, keperluan_tambahan', 'safe', 'on'=>'search'),
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
			'jumlah_peserta' => 'Jumlah Peserta',
			'nama_ruang' => 'Nama Ruang',
			'waktu_pinjam' => 'Waktu Pinjam',
			'keperluan_tambahan' => 'Keperluan Tambahan',
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
		$criteria->compare('jumlah_peserta',$this->jumlah_peserta);
		$criteria->compare('nama_ruang',$this->nama_ruang,true);
		$criteria->compare('waktu_pinjam',$this->waktu_pinjam,true);
		$criteria->compare('keperluan_tambahan',$this->keperluan_tambahan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PeminjamanRuanganForm the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

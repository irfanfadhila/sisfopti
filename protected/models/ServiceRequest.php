<?php

/**
 * This is the model class for table "sisfopti.service_request".
 *
 * The followings are the available columns in table 'sisfopti.service_request':
 * @property integer $id_service_request
 * @property string $tgl_mulai
 * @property string $tgl_selesai
 * @property string $keperluan
 * @property integer $id_user_role
 * @property integer $id_status
 * @property integer $id_reviewer1
 * @property integer $id_reviewer2
 * @property integer $id_nama_service
 * @property string $created_on
 * @property string $modified_on
 * @property string $review1_on
 * @property string $review2_on
 *
 * The followings are the available model relations:
 * @property ServerPenelitian $serverPenelitian
 * @property PendaftaranDns $pendaftaranDns
 * @property FasilitasMahasiswa $fasilitasMahasiswa
 * @property PeminjamanRuangan $peminjamanRuangan
 * @property Pesan[] $pesans
 * @property NamaService $idNamaService
 * @property UserRole $idReviewer1
 * @property UserRole $idReviewer2
 * @property Status $idStatus
 * @property UserRole $idUserRole
 * @property Pesan[] $pesans
 * @property Status $idStatus
 * @property UserRole $idUserRole
 * @property UserRole $idReviewer1
 * @property UserRole $idReviewer2
 * @property NamaService $idNamaService
 * @property FasilitasMahasiswa $fasilitasMahasiswa
 */
class ServiceRequest extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sisfopti.service_request';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tgl_mulai, tgl_selesai', 'required'),
			array('id_user_role, id_status, id_reviewer1, id_reviewer2, id_nama_service', 'numerical', 'integerOnly'=>true),
			array('keperluan, created_on, modified_on, review1_on, review2_on', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_service_request, tgl_mulai, tgl_selesai, keperluan, id_user_role, id_status, id_reviewer1, id_reviewer2, id_nama_service, created_on, modified_on, review1_on, review2_on', 'safe', 'on'=>'search'),
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
			'serverPenelitian' => array(self::HAS_ONE, 'ServerPenelitian', 'id_service_request'),
			'pendaftaranDns' => array(self::HAS_ONE, 'PendaftaranDns', 'id_service_request'),

			'fasilitasMahasiswa' => array(self::HAS_ONE, 'FasilitasMahasiswa', 'id_service_request'),
			'peminjamanRuangan' => array(self::HAS_ONE, 'PeminjamanRuangan', 'id_service_request'),
			'pesans' => array(self::HAS_MANY, 'Pesan', 'id_service_request'),
			'idNamaService' => array(self::BELONGS_TO, 'NamaService', 'id_nama_service'),
			'idReviewer1' => array(self::BELONGS_TO, 'UserRole', 'id_reviewer1'),
			'idReviewer2' => array(self::BELONGS_TO, 'UserRole', 'id_reviewer2'),
			'idStatus' => array(self::BELONGS_TO, 'Status', 'id_status'),
			'idUserRole' => array(self::BELONGS_TO, 'UserRole', 'id_user_role'),

			'pesans' => array(self::HAS_MANY, 'Pesan', 'id_service_request'),
			'idStatus' => array(self::BELONGS_TO, 'Status', 'id_status'),
			'idUserRole' => array(self::BELONGS_TO, 'UserRole', 'id_user_role'),
			'idReviewer1' => array(self::BELONGS_TO, 'UserRole', 'id_reviewer1'),
			'idReviewer2' => array(self::BELONGS_TO, 'UserRole', 'id_reviewer2'),
			'idNamaService' => array(self::BELONGS_TO, 'NamaService', 'id_nama_service'),
			'fasilitasMahasiswa' => array(self::HAS_ONE, 'FasilitasMahasiswa', 'id_service_request'),

		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_service_request' => 'Id Service Request',
			'tgl_mulai' => 'Tgl Mulai',
			'tgl_selesai' => 'Tgl Selesai',
			'keperluan' => 'Keperluan',
			'id_user_role' => 'Id User Role',
			'id_status' => 'Id Status',
			'id_reviewer1' => 'Id Reviewer1',
			'id_reviewer2' => 'Id Reviewer2',
			'id_nama_service' => 'Id Nama Service',
			'created_on' => 'Created On',
			'modified_on' => 'Modified On',
			'review1_on' => 'Review1 On',
			'review2_on' => 'Review2 On',
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

		//$criteria->select = array('*', new CDbExpression('DATE_FORMAT(t.tgl_mulai, "yy-mm-dd") AS tgl_mulai'));
		//$criteria->select = array('*', new CDbExpression('DATE_FORMAT(t.tgl_selesai, "yy-mm-dd") AS tgl_selesai'));

		/*if (isset($this->tgl_mulai) &&
			preg_match('/^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$/',
			$this->tgl_mulai)) {
			$criteria->condition = 'DATE_FORMAT(tgl_mulai, "yy-mm-dd") = :de';
			$criteria->params = array(':de' => $this->tgl_mulai);
		}

		if (isset($this->tgl_selesai) &&
			preg_match('/^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$/',
			$this->tgl_selesai)) {
			$criteria->condition = 'DATE_FORMAT(tgl_selesai, "yy-mm-dd") = :de';
			$criteria->params = array(':de' => $this->tgl_selesai);
		}*/

		$criteria->compare('id_service_request',$this->id_service_request);
		$criteria->compare('tgl_mulai',$this->tgl_mulai,true);
		$criteria->compare('tgl_selesai',$this->tgl_selesai,true);
		$criteria->compare('keperluan',$this->keperluan,true);
		$criteria->compare('id_user_role',$this->id_user_role);
		$criteria->compare('id_status',$this->id_status);
		$criteria->compare('id_reviewer1',$this->id_reviewer1);
		$criteria->compare('id_reviewer2',$this->id_reviewer2);
		$criteria->compare('id_nama_service',$this->id_nama_service);
		$criteria->compare('created_on',$this->created_on,true);
		$criteria->compare('modified_on',$this->modified_on,true);
		$criteria->compare('review1_on',$this->review1_on,true);
		$criteria->compare('review2_on',$this->review2_on,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	/*public function historyRequestGrid()
	{
		$criteria = new CDbCriteria;


	}*/

	 public function getReviewer()
    { 
     //this function returns the list of categories to use in a dropdown        
      return CHtml::listData(UserRole::model()->findAll(array('condition'=>'role_no = 3')), 'id_user_role', 'username');
    }


	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ServiceRequest the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

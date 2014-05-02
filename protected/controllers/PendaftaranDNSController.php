<?php

class PendaftaranDNSController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'index','view','admin','delete'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$serreq= ServiceRequest::model()->findByAttributes(array('id_service_request'=>$id));
		
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'serreq'=>$serreq,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new PendaftaranDNS;
		$serreq=new ServiceRequest;

		$userName= Yii::app()->user->name;  
		$userrole = UserRole::model()->findByAttributes(array('username'=>$userName));
        echo $userrole->id_user_role;

        $nameserv= NamaService::model()->findByAttributes(array('id_nama_service'=>3));
        echo $nameserv->id_nama_service;

        $rev2 = UserRole::model()->findByAttributes(array('id_user_role'=>4));
        echo $rev2->id_user_role;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PendaftaranDNS'], $_POST['ServiceRequest']))
		{
			$model->attributes=$_POST['PendaftaranDNS'];
			$serreq->attributes=$_POST['ServiceRequest'];
			date_default_timezone_set('Asia/Jakarta');
			$waktu = date('Y-m-d H:i:s');

			$valid=$model->validate()  && $valid; 
			$valid=$serreq->validate();
			$valid=$userrole->validate();
			$valid=$nameserv->validate();
			$valid=$rev2->validate();

			if(isset($_POST['button1']))
    	    {
    	    	$status = Status::model()->findByAttributes(array('id_status'=>1));
    			echo $status->id_status;
				$valid=$status->validate();
				if($valid)
				{
					if($serreq->save(false) && $nameserv->save(false))
					{
						$model->id_service_request = $serreq->id_service_request;
						$serreq->id_status = $status->id_status;
						$serreq->id_user_role = $userrole->id_user_role;
						$serreq->id_nama_service = $nameserv->id_nama_service;
						$serreq->id_reviewer2 = $rev2->id_user_role;
						$serreq->created_on = $waktu;
						$model->save(false);

					}
					$model->save(false);
					$serreq->save(false);
					$userrole->save(false);
					$nameserv->save(false);
					$rev2->save(false);
				}

				if($model->save())
					$this->redirect(array('view','id'=>$model->id_service_request));
			}

			if(isset($_POST['button2']))
    	    {
    	    	$status = Status::model()->findByAttributes(array('id_status'=>2));
    			echo $status->id_status;
				$valid=$status->validate();
				if($valid)
				{
					if($serreq->save(false) && $nameserv->save(false))
					{
						$model->id_service_request = $serreq->id_service_request;
						$serreq->id_status = $status->id_status;
						$serreq->id_user_role = $userrole->id_user_role;
						$serreq->id_nama_service = $nameserv->id_nama_service;
						$serreq->id_reviewer2 = $rev2->id_user_role;
						$serreq->created_on = $waktu;
						$model->save(false);

					}
					$model->save(false);
					$serreq->save(false);
					$userrole->save(false);
					$nameserv->save(false);
					$rev2->save(false);
				}

				if($model->save())
					$this->redirect(array('view','id'=>$model->id_service_request));
			}

		}

		

		$this->render('create',array(
			'model'=>$model,
			'serreq'=>$serreq,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$serreq= ServiceRequest::model()->findByAttributes(array('id_service_request'=>$id));

		if(isset($_POST['PendaftaranDNS'], $_POST['ServiceRequest']))
		{
			$model->attributes=$_POST['PendaftaranDNS'];
			$serreq->attributes=$_POST['ServiceRequest'];

			$valid=$model->validate() ;
			// && $valid; 
			$valid=$serreq->validate();
			date_default_timezone_set('Asia/Jakarta');
			$waktu = date('Y-m-d H:i:s');
		
			if(isset($_POST['button1']))
    	    {
    	    	$status = Status::model()->findByAttributes(array('id_status'=>1));
    			echo $status->id_status;
				$valid=$status->validate();
				if($valid)
				{
					if($serreq->save(false))
					{
						$serreq->id_status = $status->id_status;
						$model->save(false);
						$serreq->modified_on = $waktu;

					}
					$model->save(false);
					$serreq->save(false);
				}

				if($model->save())
					$this->redirect(array('view','id'=>$model->id_service_request));
			}

			if(isset($_POST['button2']))
    	    {
    	    	$status = Status::model()->findByAttributes(array('id_status'=>2));
    			echo $status->id_status;
				$valid=$status->validate();
				if($valid)
				{
					if($serreq->save(false))
					{
						$serreq->id_status = $status->id_status;
						$model->save(false);
						$serreq->modified_on = $waktu;

					}
					$model->save(false);
					$serreq->save(false);
				}

				if($model->save())
					$this->redirect(array('view','id'=>$model->id_service_request));
			}

		}
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);


		$this->render('update',array(
			'model'=>$model,
			'serreq'=>$serreq,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();


		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('PendaftaranDNS');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new PendaftaranDNS('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PendaftaranDNS']))
			$model->attributes=$_GET['PendaftaranDNS'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return PendaftaranDNS the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=PendaftaranDNS::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param PendaftaranDNS $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pendaftaran-dns-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

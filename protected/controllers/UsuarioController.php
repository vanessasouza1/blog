<?php

class UsuarioController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Usuario'),
		));
	}

	public function actionCreate() {
		$model = new Usuario;

		if (isset($_POST['Usuario'])) {
			$model->setAttributes($_POST['Usuario']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('/post/index'));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Usuario');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}


	public function actionLogin()
	{
		$model=new LoginForm;

		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			if($model->validate() && $model->login())
				$this->redirect(array('/post/index'));
		}

		$this->render('/usuario/login',array('model'=>$model));
	}

	
	public function actionLogout()
	{
		Yii::app()->user->logout(false);
		$this->redirect(array('/post/index'));
	}
}

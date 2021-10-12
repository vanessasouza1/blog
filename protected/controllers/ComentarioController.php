<?php

class ComentarioController extends GxController {

	
	public function filters(){
        return array(
            'accessControl',
        );
    }

	public function accessRules(){
        
		return array(
			array('deny', 
				'actions'=>array('create',),
				'users'=>array('?'),
			),
			array('allow', 
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
		);   
    }

	public function actionCreate($id) {
		$model = new Comentario;

		if (isset($_POST['Comentario'])) {
			$model->setAttributes($_POST['Comentario']);
			$model->id_usuario = Yii::app()->user->getId();
			$model->id_post = $id;
			$model->autor = Yii::app()->user->nome;

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('/post/view', 'id' => $id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Comentario');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

}
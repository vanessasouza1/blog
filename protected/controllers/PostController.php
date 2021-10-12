<?php

class PostController extends GxController {

	public function filters(){
        return array(
            'accessControl',
        );
    }

	public function accessRules(){
        return array(
            array('allow', 
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('deny',
				'actions'=>array('create',),
				'users'=>array('?'),
			),
			
        );
    }

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Post'),
		));
	}

	public function actionCreate() {
		/** @var Post $model */ 
		$model = new Post;

		if (isset($_POST['Post'])) {
			$model->setAttributes($_POST['Post']);
			$model->id_usuario = Yii::app()->user->getId();
			$model->autor = Yii::app()->user->nome;
			$model->data_post = date('Y-m-d');

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}


	public function actionIndex() {
		$posts = new Post;
		$posts = Post::model()->findAll(array('order'=>'id DESC'));

		$this->render('index', array(
			'posts' => $posts,
		));
	}

	public function actionQueryCategory($id){

		$posts = Post::model()->findAll(
		array("condition"=>"id_categoria =  $id","order"=>"id DESC"));
		
		$this->render('index', array(
			'posts' => $posts,
		));
	}


}
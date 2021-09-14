<?php

class PostController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Post'),
		));
	}

	public function actionCreate() {
		$model = new Post;


		if (isset($_POST['Post'])) {
			$model->setAttributes($_POST['Post']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id_post));
			}
		}

		$this->render('create', array( 'model' => $model));
	}


	

	public function actionIndex() {
		
		$posts = new Post;
		$posts = Post::model()->findAll(array('order'=>'id_post DESC'));

		$this->render('index', array(
			'posts' => $posts,
		));
	}



	/**
	 * Consulta postagens por categoria
	 */
	public function actionQueryCategory($id){

		$posts = Post::model()->findAll(
		array("condition"=>"id_categoria =  $id","order"=>"id_post DESC"));
		
		$this->render('index', array(
			'posts' => $posts,
		));
	}

	

}
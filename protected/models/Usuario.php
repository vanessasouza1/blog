<?php

Yii::import('application.models._base.BaseUsuario');

class Usuario extends BaseUsuario{

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function rules() {
		$rulesParent = parent::rules();

		array_push($rulesParent, array('email','unique'));	
		array_push($rulesParent, array('email','email'));

		return $rulesParent;
	}

	public function beforeValidate(){
		$this->nome = trim($this->nome);
		$this->email = trim($this->email);
		$this->senha = trim($this->senha);

		return parent::beforeValidate();
	}


	public function beforeSave(){
		$this->senha = SHA1($this->senha);
		
		return parent::beforeSave();
	}


}
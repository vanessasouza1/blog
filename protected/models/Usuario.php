<?php

Yii::import('application.models._base.BaseUsuario');

class Usuario extends BaseUsuario{

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function rules() {
		$rulesParent = parent::rules();

		array_push($rulesParent, array('email','unique', 'message'=>'Este email já foi cadastrado.'));	
		array_push($rulesParent, array('email','email', 'message'=>'Email inválido.'));
		array_push($rulesParent, array('senha','length','min'=>8, 'tooShort'=>'Senha muito curta (Mínimo: 8 caracteres)'));
		

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

	public function authenticate($attribute,$params){
		if(!$this->hasErrors()){

			if($this->errorCode===UserIdentity::ERROR_USERNAME_INVALID){
				$this->addError('email','Email incorreto.');
			}
			else{
				$this->addError('senha','Senha incorreta');
			}
			
		}
	}

}
<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel{
	
	public $email;
	public $senha;

	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules(){
		return array(
			
			array('email, senha', 'required'),
			array('email', 'email'),
			array('senha', 'authenticate'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels(){

		return array(
			'email'=>'Email',
			'senha' => 'Senha',
		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 * @param string $attribute the name of the attribute to be validated.
	 * @param array $params additional parameters passed with rule when being executed.
	 */
	public function authenticate($attribute,$params){
		if(!$this->hasErrors()){
			$this->_identity=new UserIdentity($this->email,$this->senha);
			if(!$this->_identity->authenticate()){
				if($this->_identity->errorCode===UserIdentity::ERROR_USERNAME_INVALID){
					$this->addError('email','Email incorreto.');
				}
				else{
					$this->addError('senha','Senha incorreta');
				}
			}
		}
	}


	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login(){
		
		if($this->_identity===null){
			$this->_identity=new UserIdentity($this->email,$this->senha);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE){
			Yii::app()->user->login($this->_identity);
			return true;
		}
		else{
			return false;
		}
	}
}

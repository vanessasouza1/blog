<?php

Yii::import('application.models._base.BasePost');

class Post extends BasePost{
	
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function beforeValidate(){
	
		$this->titulo = trim($this->titulo);
		$this->texto = trim($this->texto);
		
		return parent::beforeValidate();
	}

	public function afterFind(){
		
		$this->data_post = date('d/m/Y', CDateTimeParser::parse($this->data_post, 'yyyy-MM-dd'));
		
		return parent::afterFind();
	}
}
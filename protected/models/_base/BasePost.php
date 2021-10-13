<?php

/**
 * This is the model base class for the table "post".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Post".
 *
 * Columns in table "post" available as properties of the model,
 * followed by relations of table "post" available as properties of the model.
 *
 * @property integer $id
 * @property string $data_post
 * @property string $autor
 * @property string $titulo
 * @property string $texto
 * @property integer $id_categoria
 * @property integer $id_usuario
 *
 * @property Comentario[] $comentarios
 * @property Categoria $idCategoria
 * @property Usuario $idUsuario
 */
abstract class BasePost extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'post';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Post|Posts', $n);
	}

	public static function representingColumn() {
		return 'titulo';
	}

	public function rules() {
		return array(
			array('data_post, autor, titulo, texto, id_categoria, id_usuario', 'required', 'message'=>'Campo Obrigatório'),
			array('id_categoria, id_usuario', 'numerical', 'integerOnly'=>true),
			array('autor, titulo', 'length', 'max'=>255),
			array('id, data_post, autor, titulo, texto, id_categoria, id_usuario', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'comentarios' => array(self::HAS_MANY, 'Comentario', 'id_post'),
			'idCategoria' => array(self::BELONGS_TO, 'Categoria', 'id_categoria'),
			'idUsuario' => array(self::BELONGS_TO, 'Usuario', 'id_usuario'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'data_post' => Yii::t('app', 'Data Post'),
			'autor' => Yii::t('app', 'Autor'),
			'titulo' => Yii::t('app', 'Titulo'),
			'texto' => Yii::t('app', 'Texto'),
			'id_categoria' => null,
			'id_usuario' => null,
			'comentarios' => null,
			'idCategoria' => null,
			'idUsuario' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('data_post', $this->data_post, true);
		$criteria->compare('autor', $this->autor, true);
		$criteria->compare('titulo', $this->titulo, true);
		$criteria->compare('texto', $this->texto, true);
		$criteria->compare('id_categoria', $this->id_categoria);
		$criteria->compare('id_usuario', $this->id_usuario);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}
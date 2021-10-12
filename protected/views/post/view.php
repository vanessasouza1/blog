<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'data_post',
'autor',
'titulo',
'texto',
array(
			'name' => 'idCategoria',
			'type' => 'raw',
			'value' => $model->idCategoria !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->idCategoria)), array('categoria/view', 'id' => GxActiveRecord::extractPkValue($model->idCategoria, true))) : null,
			),
array(
			'name' => 'idUsuario',
			'type' => 'raw',
			'value' => $model->idUsuario !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->idUsuario)), array('usuario/view', 'id' => GxActiveRecord::extractPkValue($model->idUsuario, true))) : null,
			),
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('comentarios')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->comentarios as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('comentario/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>
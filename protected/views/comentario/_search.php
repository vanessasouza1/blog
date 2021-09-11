<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id_comentario'); ?>
		<?php echo $form->textField($model, 'id_comentario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'nome_autor'); ?>
		<?php echo $form->textField($model, 'nome_autor', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'comentario'); ?>
		<?php echo $form->textArea($model, 'comentario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'id_post'); ?>
		<?php echo $form->dropDownList($model, 'id_post', GxHtml::listDataEx(Post::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->

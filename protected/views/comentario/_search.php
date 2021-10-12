<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'autor'); ?>
		<?php echo $form->textField($model, 'autor', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'comentario'); ?>
		<?php echo $form->textArea($model, 'comentario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'id_post'); ?>
		<?php echo $form->dropDownList($model, 'id_post', GxHtml::listDataEx(Post::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'id_usuario'); ?>
		<?php echo $form->dropDownList($model, 'id_usuario', GxHtml::listDataEx(Usuario::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->

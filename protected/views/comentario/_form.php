<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'comentario-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'autor'); ?>
		<?php echo $form->textField($model, 'autor', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'autor'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'comentario'); ?>
		<?php echo $form->textArea($model, 'comentario'); ?>
		<?php echo $form->error($model,'comentario'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'id_post'); ?>
		<?php echo $form->dropDownList($model, 'id_post', GxHtml::listDataEx(Post::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'id_post'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'id_usuario'); ?>
		<?php echo $form->dropDownList($model, 'id_usuario', GxHtml::listDataEx(Usuario::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'id_usuario'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
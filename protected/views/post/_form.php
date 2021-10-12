<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'post-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'data_post'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'data_post',
			'value' => $model->data_post,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'data_post'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'autor'); ?>
		<?php echo $form->textField($model, 'autor', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'autor'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model, 'titulo', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'titulo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'texto'); ?>
		<?php echo $form->textArea($model, 'texto'); ?>
		<?php echo $form->error($model,'texto'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'id_categoria'); ?>
		<?php echo $form->dropDownList($model, 'id_categoria', GxHtml::listDataEx(Categoria::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'id_categoria'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'id_usuario'); ?>
		<?php echo $form->dropDownList($model, 'id_usuario', GxHtml::listDataEx(Usuario::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'id_usuario'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('comentarios')); ?></label>
		<?php echo $form->checkBoxList($model, 'comentarios', GxHtml::encodeEx(GxHtml::listDataEx(Comentario::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
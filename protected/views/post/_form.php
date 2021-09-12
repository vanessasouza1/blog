<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="pt-br">


	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form2.css">


</head>

<body>


<div class="container-fluid ">

	<div class="form offset-3 col-6 create-post-section ">


		<?php $form = $this->beginWidget('GxActiveForm', array(
			'id' => 'postagem-form',
			'enableAjaxValidation' => false,
			
		));
		?>

		<p class="note">
			<?php echo Yii::t('app', 'Campos com'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'são obrigatórios'); ?>.
		</p>

		<?php echo $form->errorSummary($model); ?>

			<div class="row">
				<?php echo $form->labelEx($model,'data_post'); ?>
			</div>
			<div class="row">
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

			</div><!-- row -->
			<div class="row">
				<?php echo $form->textField($model, 'autor', array('maxlength' => 255)); ?>
				<?php echo $form->error($model,'autor'); ?>
			</div><!-- row -->


			<div class="row">
				<?php echo $form->labelEx($model,'titulo'); ?>
			</div><!-- row -->
			<div class="row">
				<?php echo $form->textField($model, 'titulo', array('maxlength' => 255)); ?>
				<?php echo $form->error($model,'titulo'); ?>
			</div><!-- row -->

			<div class="row">
				<?php echo $form->labelEx($model,'imagem'); ?>
			</div><!-- row -->
			<div class="row">
				<?php echo $form->textField($model, 'imagem', array('maxlength' => 255)); ?>
				<?php echo $form->error($model,'imagem'); ?>
			</div><!-- row -->

			<div class="row">
				<?php echo $form->labelEx($model,'texto'); ?>
			</div><!-- row -->
			<div class="row">
				<?php echo $form->textArea($model, 'texto'); ?>
				<?php echo $form->error($model,'texto'); ?>
			</div><!-- row -->

			<div class="row">
				<?php echo $form->labelEx($model,'id_categoria'); ?>
			</div><!-- row -->
			<div class="row">
				<?php echo $form->dropDownList($model, 'id_categoria', GxHtml::listDataEx(Categoria::model()->findAllAttributes(null, true))); ?>
				<?php echo $form->error($model,'id_categoria'); ?>
			</div><!-- row -->

	<?php
	echo GxHtml::submitButton(Yii::t('app', 'Postar'));
	$this->endWidget();
	?>
	</div><!-- form -->

</div>


</body>
</html>
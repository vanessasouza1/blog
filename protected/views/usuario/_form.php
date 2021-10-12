<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="pt-br">

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form2.css">
</head>

<body>

<div class="container-fluid container-config">
	<div class="form offset-4 col-4 create-post-section ">

		<?php $form = $this->beginWidget('GxActiveForm', array(
			'id' => 'usuario-form',
			'enableAjaxValidation' => false,
		));
		?>

			<p class="note">
				<?php echo Yii::t('app', 'Campos com'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'são obrigatórios'); ?>.
			</p>

			<?php //echo $form->errorSummary($model); ?>

				<div class="row">
					<?php echo $form->labelEx($model,'nome'); ?>
				</div>
				<div class="row">
					<?php echo $form->textField($model, 'nome', array('maxlength' => 255)); ?>
					<?php echo $form->error($model,'nome'); ?>
				</div><!-- row -->

				<div class="row">
					<?php echo $form->labelEx($model,'email'); ?>
				</div>
				<div class="row">
					<?php echo $form->textField($model, 'email', array('maxlength' => 255)); ?>
					<?php echo $form->error($model,'email'); ?>
				</div><!-- row -->

				<div class="row">
					<?php echo $form->labelEx($model,'senha'); ?>
				</div>
				<div class="row">
					<?php echo $form->passwordField($model,'senha', array('maxlength' => 255)); ?>
					<?php echo $form->error($model,'senha'); ?>
				</div><!-- row -->

				
				<br>
		<?php
		echo GxHtml::submitButton(Yii::t('app', 'Cadastrar'));
		$this->endWidget();
		?>
		
	
	</div>

</div>

</body>
</html>
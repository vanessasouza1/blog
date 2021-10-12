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
				'id' => 'comentario-form',
				'enableAjaxValidation' => false,
			));
			?>
				<p class="note comment">
					<?php echo Yii::t('app', 'Campos com'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'são obrigatórios'); ?>.
				</p>

				<?php //echo $form->errorSummary($model); ?>
				<div class="row">
					<?php echo $form->labelEx($model,'comentario'); ?>
				</div>
				<div class="row">
					<?php echo $form->textArea($model, 'comentario'); ?>
					<?php echo $form->error($model,'comentario'); ?>
				</div>
				
				<br>
			<?php
			echo GxHtml::submitButton(Yii::t('app', 'Salvar'));
			$this->endWidget();
			?>
		
	</div>

</div>

</body>
</html>
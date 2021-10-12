<?php
/* @var $this UsuarioController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="pt-br">

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form2.css">
</head>

<body>

<h4 class="title1 text-center ">Login</h4>

<div class="container-fluid container-config">
	<div class="form offset-4 col-4 create-post-section ">

		<div class="form">
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'login-form',
				'enableClientValidation'=>true,
				'clientOptions'=>array(
					'validateOnSubmit'=>true,
				),
			)); ?>


				<div class="row">
					<?php echo $form->labelEx($model,'email'); ?>
					<?php echo $form->textField($model,'email'); ?>
					<?php echo $form->error($model,'email'); ?>
				</div>

				<div class="row" id="password">
					<?php echo $form->labelEx($model,'senha'); ?>
					<?php echo $form->passwordField($model,'senha'); ?>
					<?php echo $form->error($model,'senha'); ?>
					
				</div>

				<br>

				<div class="row buttons">
					<?php echo CHtml::submitButton('Login'); ?>
				</div>

				<hr>
				<div class="text-center span-register">
					<span>
						<a href="/blog/index.php/usuario/create">Cadastre-se</a>
					</span>
				</div>

			<?php $this->endWidget(); ?>
		</div><!-- form -->

		</div>

</div>

</body>
</html>
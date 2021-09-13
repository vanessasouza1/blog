<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="pt-br">

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/create.css">
</head>

<body>
	<?php
	$this->breadcrumbs = array(
		$model->label(2) => array('index'),
		Yii::t('app', 'Create'),
	);
	?>

	<h4 class="title1 text-center ">Adicionar Comentário</h4>

	<?php
	$this->renderPartial('_form', array(
			'model' => $model,
			'buttons' => 'create'));
	?>

</body>
</html>
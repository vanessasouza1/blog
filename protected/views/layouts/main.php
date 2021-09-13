<?php /* @var $this Controller */ 
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="pt-br">

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/bootstrap/css/bootstrap.min.css"/>
	
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/bootstrap/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/bootstrap/css/cursor.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/index.css">

	


	<link rel="shortcut icon" href="favicon.png" />

	<link rel="icon" type="image/x-icon" href="favicon.png" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>



<div class="container-flex" id="page">

	<header>
		<nav class="navbar navbar-expand-lg navbar-expand-sm navbar-light bg-light">
			<a class="navbar-brand" href="/blog/index.php/post/index"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logoConexa.png" class="img-fluid image" alt="logo Conexa"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" >
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="main-navbar">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="/blog/index.php/post/index">Home</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Categorias
						</a>
						<div class="dropdown-menu" id="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" value="1" href="<?php echo Yii::app()->createUrl('post/queryCategory',array('id'=>1)); ?>">Integrações</a>
						<a class="dropdown-item" value="2" href="<?php echo Yii::app()->createUrl('post/queryCategory',array('id'=>2)); ?>">Serviços</a>
						<a class="dropdown-item" value="3" href="<?php echo Yii::app()->createUrl('post/queryCategory',array('id'=>3)); ?>">Financeiro</a>
						<a class="dropdown-item" value="4" href="<?php echo Yii::app()->createUrl('post/queryCategory',array('id'=>4)); ?>">Agenda</a>
						<a class="dropdown-item" value="5" href="<?php echo Yii::app()->createUrl('post/queryCategory',array('id'=>5)); ?>">Parceiros</a>
						
						<div class="dropdown-divider"></div>
							<a class="dropdown-item" value="6" href="<?php echo Yii::app()->createUrl('post/queryCategory',array('id'=>6)); ?>">Outros</a>
						</div>
					</li>
				</ul>
			</div>
			
		</nav>
	</header>
	<?php echo $content; ?>

	<div class="clear"></div>
</div>


</body>
</html>
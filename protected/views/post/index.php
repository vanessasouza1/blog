<?php /* @var $this Controller */ ?>

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
        <main>
            <div class="container container-config">

                <div class="row">
                    
                    <?php if(!Yii::app()->user->isGuest) :?>
                        <form action="/blog/index.php/post/create" method="">
                            <button type="submit" class="btn button-create button-create-post mr-5">Nova Postagem</button>
                        </form>
                    
                        <form action="" method="" class="">
                            <button type="submit" class="btn button-create login-name"><?php echo Yii::app()->user->nome; ?></button>
                        </form>
                        <form action="/blog/index.php/usuario/logout" method="">
                            <button type="submit" class="btn button-create logout">Sair</button>
                        </form>

                    <?php else: ?>
                        <form action="/blog/index.php/usuario/login" method="">
                            <button type="submit" class="btn button-create login">Logar</button>
                        </form>
                        <form action="/blog/index.php/usuario/create" class="mr-3" method="get">
                            <button type="submit" class="btn btn-outline-secondary button-register ">Cadastrar</button>
                        </form>

                    <?php endif ?>
                </div>

                
                
                <?php if(!empty($models)): ?>
                    <h3 class="title1">Recentes</h3>
                    <?php foreach($models as $model):  ?>
                        <div class="row post-container">
                            <div class="col-5  post-container-image">
                                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/financeiro.jpg" class="img-thumbnail image-card-post" alt="Imagem notícia"></a>
                            </div>
                            <div class="col-7">
                                <!-- vai ter q ser o nome do user id-->
                                <span class="span-card-post" name="autor" id="autor"><?php echo GxHtml::encode($model->autor); ?></span>

                                <h4><a class="link-card-post" name="titulo"  href="<?php echo Yii::app()->createUrl('post/view',array('id'=>$model->id)); ?>"><?php echo GxHtml::encode($model->titulo); ?></a></h4>
                                <p class="p-card-post " name="texto" ><?php echo GxHtml::encode($model->texto); ?></>
                                <hr>
                                <button type="button" name="id_categoria" class=" btn button-card-tag"><a class="button-tag" href="<?php echo Yii::app()->createUrl('post/queryCategory',array('id'=>$model->id_categoria)); ?>"><?php echo GxHtml::encode($model->idCategoria); ?></a></button>
                                
                                <p class="span-card-post data-post" name="data_post" id="date"><?php echo GxHtml::encode($model->data_post); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="pagination justify-content-end">
                        <?php $this->widget('CLinkPager', array( //  PaginationWidget
                            'pages' => $pages,
                            'header' => ' ',
                            'prevPageLabel' => '< Anterior',
                            'nextPageLabel' => 'Próximo >',
                        )) ?>
                    </div>  
                <?php else: ?>
                    <div class="no-post text-center">
                        <h3>Ainda não temos postagens, seja o primeiro(a) a criar! 😀</h3>
                    </div>
                <?php endif ?>


               
            </div>
        </main>

        
    </div>

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/jquery/js/jquery.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/jquery/js/jquery-ui.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/bootstrap/js//bootstrap.min.js"></script>
</body>
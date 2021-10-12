<?php /* @var $this Controller */ 
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="pt-br">

	
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/view2.css">
</head>

<body>
    <main>
        <div class="container">
            <h1 class="title-article offset-1 col-10 text-center" name="titulo"><?php echo GxHtml::encode($model->titulo); ?></h1>
            <div class="text-center">
                <button type="button" name="id_categoria" class=" btn button-card-tag"><a class="button-tag" href="<?php echo Yii::app()->createUrl('post/queryCategory',array('id'=>$model->id_categoria)); ?>"><?php echo GxHtml::encode($model->idCategoria); ?></a></button>
            </div>
            <div class="row mt-5">
                <i class="fas fa-user-circle icon-user"></i>
                <div class="col-11">
                    <!-- colocar nome do usuario atual-->
                   
                    <p class="user-name " name="autor"><?php echo GxHtml::encode($model->autor); ?></p>
                    <span class="span-user-date" name="data_post"><?php echo GxHtml::encode($model->data_post); ?></span>
                </div>
            </div>
            <div>
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/financeiro.jpg" name="imagem" class="img-fluid image-article" alt="Imagem Artigo">
            </div>
            <article name="texto ">
				<p class="text-justify p-article"><?php echo GxHtml::encode($model->texto); ?></p>
                
            </article>

         
            <section class="comments-section-view">
                <h3>Comentários</h3>
                <hr>

                <?php foreach($model->comentarios as $comentario):  ?>
                    <div class="row">
                        <i class="fas fa-user-circle icon-user"></i>
                        <div class="col-11">
                            <!-- colocar nome do usuario atual-->
                            <p class="user-name"><?php echo GxHtml::encode($comentario->autor); ?></p>
                            
                            <span><?php echo GxHtml::encode($comentario->comentario); ?></span>
                        </div>
                    </div>
                <hr>
                <?php endforeach; ?> 
                
                <!--<form action="/blog3/index.php/comentario/create" class="form-button-comment" method="">-->
                <form action="<?php echo Yii::app()->createUrl('comentario/create',array('id'=>$model->id)); ?>" class="form-button-comment" method="">
                    <button type="submit" class="btn button-comment">Deixe seu comentário</button>
                </form>
            </section>
        </div>

         
    </main>


   

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/jquery/js/jquery.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/bootstrap/js//bootstrap.min.js"></script>
</body>
</html>
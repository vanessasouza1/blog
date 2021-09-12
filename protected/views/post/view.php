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
                <button type="button" name="id_categoria" class=" btn button-card-tag "><?php echo GxHtml::encode($model->idCategoria); ?></button>
            </div>
            <div class="row mt-5">
                <i class="fas fa-user-circle icon-user"></i>
                <div class="col-11">
                    <p class="user-name " name="autor"><?php echo GxHtml::encode($model->autor); ?></p>
                    <span class="span-user-date" name="data_post"><?php echo GxHtml::encode($model->data_post); ?></span>
                </div>
                
            </div>

            <div>
                <img src="../assets/images/financeiro.jpg" name="imagem" class="img-fluid image-article" alt="Imagem Artigo">
            </div>
            <article name="texto ">
				<p class="text-justify"><?php echo GxHtml::encode($model->texto); ?></p>
                
            </article>

           

            <section class="comments-section">
                
                <h3>Deixe seu comentário</h3>
               <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nome *</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Seu nome">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Seu comentário *</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="text-center ">
                        <button type="submit" class=" btn button-index">Comentar</button>
                    </div>
                </form>
            </section>

            

         
            <section class="comments-section-view">
                <h3><?php  ?> Comentários</h3>
                <hr>
                <?php foreach($model->comentarios as $comentario):  ?>
                    <div class="row">
                        <i class="fas fa-user-circle icon-user"></i>
                        <div class="col-11">
                            <p class="user-name"><?php echo GxHtml::encode($comentario->nome_autor); ?></p>
                            <span><?php echo GxHtml::encode($comentario->comentario); ?></span>
                        </div>
                    </div>
                <hr>
                <?php endforeach; ?> 
                
            </section>
        </div>
    </main>

    

   
</body>
</html>
<?php /* @var $this Controller */ ?>
<body>


    <main>
        <div class="container">

            <div class="row">
               <form action="/blog/index.php/post/create" method="">
                    <button type="submit" class="btn button-create">Nova Postagem</button>
                </form>
                
            </div>

            <div class="row ">
                <div class="col-8 search-div">
                    <form method="" action="" class="input-group ">
                        <input type="text" class="form-control " id="search-input" placeholder="Pesquisar">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary " id="search-btn" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>

        
            </div>

            <h3 class="title1">Recentes</h3>
            

            <?php foreach($posts as $post):  ?>
                
                <div class="row post-container">
                    <div class="col-5  post-container-image">
                        <a href="#"><img src="assets/images/financeiro.jpg" class="img-thumbnail image-card-post" alt="Imagem notícia"></a>
                    </div>
                    <div class="col-7">
                        <span class="span-card-post" name="autor" id="autor"><?php echo GxHtml::encode($post->autor); ?></span>

                        <h4><a class="link-card-post" name="titulo"  href="<?php echo Yii::app()->createUrl('post/view',array('id'=>$post->id_post)); ?>"><?php echo GxHtml::encode($post->titulo); ?></a></h4>
                        <p class="p-card-post " name="texto" ><?php echo GxHtml::encode($post->texto); ?></>
                        <hr>
                        <button type="button" name="id_categoria" class=" btn button-card-tag"><?php echo GxHtml::encode($post->idCategoria); ?></button>
                        
                        <p class="span-card-post data-post" name="data_post"><?php echo GxHtml::encode($post->data_post); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>    
           
            

            <div class="text-center div-button-index">
                <button type="button" class=" btn button-index">Ver mais Posts</button>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer">

        </div>
    </footer>

</body>

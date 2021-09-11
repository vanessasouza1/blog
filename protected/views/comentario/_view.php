<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id_comentario')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id_comentario), array('view', 'id' => $data->id_comentario)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('nome_autor')); ?>:
	<?php echo GxHtml::encode($data->nome_autor); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('comentario')); ?>:
	<?php echo GxHtml::encode($data->comentario); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('id_post')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->idPost)); ?>
	<br />

</div>
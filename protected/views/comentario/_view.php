<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('autor')); ?>:
	<?php echo GxHtml::encode($data->autor); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('comentario')); ?>:
	<?php echo GxHtml::encode($data->comentario); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('id_post')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->idPost)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('id_usuario')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->idUsuario)); ?>
	<br />

</div>
<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('data_post')); ?>:
	<?php echo GxHtml::encode($data->data_post); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('autor')); ?>:
	<?php echo GxHtml::encode($data->autor); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('titulo')); ?>:
	<?php echo GxHtml::encode($data->titulo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('texto')); ?>:
	<?php echo GxHtml::encode($data->texto); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('id_categoria')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->idCategoria)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('id_usuario')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->idUsuario)); ?>
	<br />

</div>
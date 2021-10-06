<?php

class m211006_140616_add_column_id_user_postagem extends CDbMigration
{
	public function up()
	{
		$this->addColumn('post', 'id_usuario', 'int');
	}

	public function down()
	{
		$this->dropColumn('post', 'id_usuario');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}
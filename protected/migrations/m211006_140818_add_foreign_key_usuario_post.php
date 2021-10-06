<?php

class m211006_140818_add_foreign_key_usuario_post extends CDbMigration
{
	public function up()
	{
		$this->addForeignKey('fk_id_usuario', 'post', 'id_usuario', 'usuario', 'id', 'CASCADE', 'CASCADE');
	}

	public function down()
	{
		$this->dropForeignKey('fk_id_usuario', 'post');
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
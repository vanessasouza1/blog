<?php

class m211006_140341_create_usuario_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('usuario', array(
            'id' => 'pk',
            'nome' => 'string NOT NULL',
            'email' => 'string NOT NULL',
			'senha' => 'string NOT NULL',
        ));
	}

	public function down()
	{
		$this->dropTable('usuario');
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
<?php

use yii\db\Migration;

/**
 * Handles the creation of table `company`.
 */
class m181220_160210_create_company_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('company', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'site' => $this->string(),
        ]);

        $this->createTable('tag', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'icon_name' => $this->string(),
        ]);

        $this->createTable('company_tag', [
            'company_id' => $this->integer(),
            'tag_id' => $this->integer(),
        ]);

        $this->addPrimaryKey('pk-company_tag','company_tag',['company_id', 'tag_id']);
        $this->addForeignKey('fk-company_tag-company', 'company_tag','company_id','{{%company}}','id','CASCADE','CASCADE');
        $this->addForeignKey('fk-company_tag-tag', 'company_tag','tag_id','{{%tag}}','id','CASCADE','CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('company_tag');
        $this->dropTable('tag');
        $this->dropTable('company');
    }
}

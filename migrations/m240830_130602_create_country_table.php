<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%country}}`.
 */
class m240830_130602_create_country_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp(): void
    {
        $this->createTable('{{%country}}', [
            'code' => $this->char(2)->notNull(),
            'name' => $this->char(52)->notNull(),
            'population' => $this->integer()->notNull()->defaultValue(0),
        ]);

        $this->addPrimaryKey('pk_on_code', '{{%country}}', 'code');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown(): void
    {
        $this->dropTable('{{%country}}');
    }
}

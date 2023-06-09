<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%obat083}}`.
 */
class m230523_081212_create_obat083_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%obat083}}', [
            'id' => $this->primaryKey(),
            'kode_obat' => $this->string()->notNull(),
            'harga' => $this->decimal(10, 2)->notNull(),
            'stok_obat' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%obat083}}');
    }
}

<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mhs083}}`.
 */
class m230528_115458_create_mhs083_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mhs083}}', [
            'id' => $this->primaryKey(),
            'no_induk_mahasiswa' => $this->string()->notNull(),
            'nama_mahasiswa' => $this->string()->notNull(),
            'kelas' => $this->string()->notNull(),
            'status' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mhs083}}');
    }
}

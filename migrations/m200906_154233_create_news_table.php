<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m200906_154233_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->createTable('news', [
			'id' => $this->primaryKey(),
			'date' => $this->dateTime(),
			'previewText' => $this->text(),
		]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news}}');
    }
}

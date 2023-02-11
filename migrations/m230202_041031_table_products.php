<?php

use yii\db\Migration;

/**
 * Class m230202_041031_table_products
 */
class m230202_041031_table_products extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('products', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100),
            'description' => $this->string(),
            'category_id' => $this->integer(),
        ], 'CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci ENGINE=InnoDB');

        $this->addForeignKey('fk_products_categories', 'products', 'category_id', 'categories', 'id', 'RESTRICT', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('products');

        return true;
    }
}

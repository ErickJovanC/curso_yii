<?php

use yii\db\Migration;

/**
 * Class m230211_070454_edit_products_table
 */
class m230211_070454_edit_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('products', 'name', 'title');
        $this->addColumn('products', 'price', $this->float());
        $this->addColumn('products', 'cost', $this->float());
        $this->addColumn('products', 'stock', $this->float());
        $this->addColumn('products', 'is_countable', $this->boolean());
        $this->addColumn('products', 'bulk', $this->boolean());
        $this->addColumn('products', 'sku', $this->string(10));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230211_070454_edit_products_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230211_070454_edit_products_table cannot be reverted.\n";

        return false;
    }
    */
}

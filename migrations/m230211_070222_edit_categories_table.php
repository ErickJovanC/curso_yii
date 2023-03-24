<?php

use yii\db\Migration;

/**
 * Class m230211_070222_edit_categories_table
 */
class m230211_070222_edit_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('categories', 'name', 'title');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230211_070222_edit_categories_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230211_070222_edit_categories_table cannot be reverted.\n";

        return false;
    }
    */
}

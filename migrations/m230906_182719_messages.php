<?php

use yii\db\Migration;

/**
 * Class m230906_182719_messages
 */
class m230906_182719_messages extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('messages', [
            'id' => $this->primaryKey(),
            'id_cafe' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'address' => $this->string()->notNull(),
            'landmark' => $this->string(),
            'cuisine' => $this->string(),
            'distance' => $this->integer()->notNull(),
            'time' => $this->integer(),
            'photo' => $this->string(),
            'business_lunch' => $this ->boolean(),
            'price' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230906_182719_messages cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230906_182719_messages cannot be reverted.\n";

        return false;
    }
    */
}

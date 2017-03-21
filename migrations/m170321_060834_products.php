<?php

use yii\db\Migration;

class m170321_060834_products extends Migration
{
    public function up()
    {
        $this->createTable('product_category', [
            'id' => $this->primaryKey(),
            'name' =>$this->string(255),
            'status' =>$this->smallInteger()->defaultValue(1),
            'created_at' =>$this->integer(),
            'updated_at' =>$this->integer(),
            'created_by' =>$this->integer(),
            'updated_by' =>$this->integer(),
        ]);
    }

    public function down()
    {
        echo "m170321_060834_products cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}

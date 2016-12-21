<?php

use yii\db\Migration;

class m161221_092553_section extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this -> createTable ('{{%section}}', [
            'id' => $this -> primaryKey(),
            'name' => $this -> string(100) ->notNull(),
            'slug' => $this->string()->notNull()->unique(),
            'status' => $this->integer(),
            'image_id' => $this->integer(),
            'created_at' => $this -> integer(),
            'created_by' => $this -> integer(),
            'updated_at' => $this -> integer(),
            'updated_by' => $this -> integer(),
        ], $tableOptions);
    }
    public function down()
    {
        $this -> dropTable ('{{%section}}');
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

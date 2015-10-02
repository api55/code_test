<?php

use yii\db\Schema;
use yii\db\Migration;

class m151002_115707_result extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

	$this->addColumn('user','avatar', 'string null');
	$this->addColumn('user','mobile_num', 'string(32) null');
    }

    public function down()
    {
	$this->dropColumn('user','avatar');
	$this->dropColumn('user', 'mobile_num');

        return true;
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

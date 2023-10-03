<?php

namespace Thunder;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * Likes class
 */
class Likes extends Migration
{


    /** For Creating an Table **/
    public function up()
    {
        /** Creating an Table **/
        $this->addColumn('id int(11) NOT NULL AUTO_INCREMENT');
        $this->addColumn('user_id int(11) default 0 NULL');
        $this->addColumn('post_id int(11) default 0 NULL');
        $this->addColumn('disabled tinyint(1) default 0 NULL');
        $this->addPrimaryKey('id');
        $this->addKey('user_id');
        $this->addKey('post_id');
        $this->addKey('disabled');
        /**
        $this->addUniqueKey();
        $this->addKey();
        */
        
        $this->createTable('likes');
        

    } // End Method


    /** For Droping an Table **/
    public function down()
    {
        $this->dropTable('likes');
    } // End Method

}
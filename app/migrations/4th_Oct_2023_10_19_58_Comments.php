<?php

namespace Thunder;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * Comments class
 */
class Comments extends Migration
{


    /** For Creating an Table **/
    public function up()
    {
        /** Creating an Table **/
        $this->addColumn('id int(11) NOT NULL AUTO_INCREMENT');
        $this->addColumn('user_id int(11) default 0 NOT NULL');
        $this->addColumn('post_id int(11) default 0 NOT NULL');
        $this->addColumn('comment varchar(1024) NULL');
        $this->addColumn('date_created datetime NULL');
        $this->addColumn('date_updated datetime NULL');
        $this->addPrimaryKey('id');
        $this->addKey('user_id');
        $this->addKey('post_id');
        /**
        $this->addUniqueKey();
        $this->addKey();
        */
        
        $this->createTable('comments');
        
       

    } // End Method


    /** For Droping an Table **/
    public function down()
    {
        $this->dropTable('comments');
    } // End Method

}